$(function () {
    var map, service, display = "";
    var listShop = [];
    var lastIndex = 0;
    var limit = 5;
    var markers = [];
    var coords,infowindow;

    if (navigator.geolocation) {
        var options = {
            enableHighAccuracy: true,
            timeout: Infinity,
            maximumAge: 0
        };
        navigator.geolocation.getCurrentPosition(detectLocation, inputLocationManually, options);
    } else {
        inputLocationManually();
    }


    function detectLocation(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        coords = new google.maps.LatLng(lat, lng);
        showLaundry();
    }

    function inputLocationManually() {
        $('#load-page').hide();
        $('#unable-to-detect').show();
    }

    function findLaundry(coords) {
        infowindow = new google.maps.InfoWindow();
        service = new google.maps.places.PlacesService(map);
        var requirements = {
            location: coords,
            radius: 3000,
            types: ['laundry'],
        };

        $.post(
            "/location",
            {x: coords.lng, y: coords.lat}
        );

        service.nearbySearch(requirements, storeResult);
    }

    function storeResult(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            $('#load-page').hide();
            $('#no-laundryshops-found').hide();
            for (var i = 0; i < results.length; i++) {
                createMarker(results[i]);
            }
        }
        else {
            $('#no-laundryshops-found').toggle();
        }
    }

    function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
            map: map,
            icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png', 
            position: place.geometry.location
        });

        markers.push(marker);
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.close();
            var row = '<div class="laundry-header collapsible-header" data-target=' + place.place_id
                        + '><p><span>'
                        + place.name + '</span><span id="vici">'
                        + place.vicinity + '</span></p></div><div class="collapsible-body"></div>';

            infowindow.setContent(row);
            infowindow.open(map, this);
        });
    }

    function deleteMarkers() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers = [];
    }

    function showLaundry() {
        if(coords == null) coords = new google.maps.LatLng( 10.3402623, 123.94155180000007);
        map = new google.maps.Map(document.getElementById('map'), {
            center: coords,
            zoom: 15,
            mapTypeControl: false,
            fullscreenControl: false,
            disableDefaultUI: true,
            mapTypeId: 'roadmap'
        });

        var nav_size = $('nav').height();
        var window_size = $(window).height();
        $('#map').height(window_size - nav_size);
        var marker = new google.maps.Marker({
            map: map,
            icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png', 
            position: coords,
            draggable: true,
            animation: google.maps.Animation.DROP,
        });

        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);

        map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

        map.addListener('bounds_changed', function (e) {
            searchBox.setBounds(map.getBounds());
            $('#pac-input').show();
        });

        searchBox.addListener('places_changed', function (s) {
            deleteMarkers();
            var places = searchBox.getPlaces();
            if (places.length == 0 || places.length > 1) {
                return;
            }

            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                marker.setPosition(new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng()));
                lat = marker.getPosition().lat();
                lng = marker.getPosition().lng();
                marker.addListener('click', toggleBounce);
                marker.addListener('position_changed', function () {
                    lat = marker.getPosition().lat();
                    lng = marker.getPosition().lng();
                });

                coords = new google.maps.LatLng(lat, lng);

                findLaundry(coords);

                function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);

        });

            findLaundry(coords);
    }

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 10.3402623, lng: 123.94155180000007 },
            zoom: 13,
            mapTypeControl: false,
            fullscreenControl: false,
            disableDefaultUI: true,
            mapTypeId: 'roadmap'
        });

        var nav_size = $('nav').height();
        var window_size = $(window).height();
        $('#map').height(window_size - nav_size);
    }

    // $("#pac-btn").click(function () {
    //     coords = new google.maps.LatLng(lat, lng);
    //     initMap(coords);
    //     findLaundry(coords);
    //     $('#map').hide();
    //     $('#pac-input').hide();
    // });

    $("#unable-to-detect").on('click', '#manual-button', function () {
        $('#unable-to-detect').hide();
        showLaundry();
    });
});
