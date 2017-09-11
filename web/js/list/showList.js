$(function () {
    var map, service, display = "";
    var listShop = [];
    var lastIndex = 0;
    var limit = 5;
    var coords;

    if (navigator.geolocation) {
        var options = {
            enableHighAccuracy: true,
            timeout: Infinity,
            maximumAge: 0
        };

        navigator.geolocation.watchPosition(detectLocation, inputLocationManually, options);
    } else {
        inputLocationManually();
    }

    function detectLocation(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        coords = new google.maps.LatLng(lat, lng);
        initMap(coords);
        findLaundry(coords);
        $('#display-list').show();
    }

    function inputLocationManually() {
        $('#load-page').hide();
        $('#unable-to-detect').show();
    }

    function initMap(coords) {
        var mapOptions = {
            zoom: 20,
            center: coords,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.createElement("div"), mapOptions);
    }

    function findLaundry(coords) {
        service = new google.maps.places.PlacesService(map);
        var requirements = {
            location: coords,
            radius: 800,
            types: ['laundry'],
        };
        service.nearbySearch(requirements, listResult);
    }

    function renderList(laundry_shops) {
        var ul_id = $('#laundry-list');
        laundry_shops.map(function (laundry) {
            var row = '<li><div class="laundry-header collapsible-header" data-target=' + laundry.place_id +
                '><i class="material-icons">local_laundry_service</i>' + laundry.name +
                '</div> <div class="collapsible-body"></div></li>';
            ul_id.append(row);
        });
    }

    function listResult(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            listShop = results;
            $('#load-page').hide();
            $('#list-container').show();
            renderList(results);
        } else {
            // TODO: Display no laundry shops found nearby.
            $('#no-laundryshops-found').show();
        }
>>>>>>> 8a4c8dc... Implement manual input of location
    }

<<<<<<< HEAD
function failure() {
    $('#list-container').html("<p>Unable to locate.</p>");
}  
=======

    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -33.8688, lng: 151.2195 },
            zoom: 13,
            mapTypeId: 'roadmap'
        });

        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);

        map.addListener('bounds_changed', function () {
            searchBox.setBounds(map.getBounds());
        });

        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();
            if (places.length == 0) {
                return;
            }

            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }

                var marker = new google.maps.Marker({
                    map: map,
                    title: place.name,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: place.geometry.location
                });
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();
                marker.addListener('click', toggleBounce);
                marker.addListener('position_changed', function () {
                    lat = marker.getPosition().lat();
                    lng = marker.getPosition().lng();
                });

                coords = new google.maps.LatLng(lat, lng);
                function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }

                    if (window.confirm("Confirm location")) {
                        initMap(coords);
                        findLaundry(coords);
                        $('#display-list').show();
                        $('#map').hide();
                        $('#input-location').hide();
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

    }

    $("#laundry-list").on('click', '.laundry-header', function () {
        var placeId = $(this).data('target');
        var theUrl = placeId + "/details";
        var body = $(this).next('.collapsible-body');
        $.ajax({
            url: theUrl,
        }).done(function (data) {
            body.html(data);
        }).fail(function (e) {
            var errorMessage = "Cannot retrieve data";
            body.html(errorMessage);
        });
    });

    $("#unable-to-detect").on('click', '#manual-button', function () {
        $('#map').show();
        $('#input-location').show();
        $('#unable-to-detect').hide();
        initAutocomplete();
    });

});
