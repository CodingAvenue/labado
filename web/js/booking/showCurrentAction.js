function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: user.coordinates
    });

    var marker = new google.maps.Marker({
            position: user.coordinates,
            map: map,
    });

    var marker = new google.maps.Marker({
            position: labadoer.coordinates,
            map: map,
            icon: {
                url: markerIcon,
                scaledSize: new google.maps.Size(75,75),
            }
    });
    
    var bounds = new google.maps.LatLngBounds();
    bounds.extend(user.coordinates);
    bounds.extend(labadoer.coordinates);
    map.fitBounds(bounds);

    determineFullAddress(labadoer.coordinates, map);
    determineDistance(user.coordinates, labadoer.coordinates); 
}

function determineDistance(origin, destination) {
    var service = new google.maps.DistanceMatrixService;
    service.getDistanceMatrix({
      origins: [origin],
      destinations: [destination],
      travelMode: 'DRIVING',
      unitSystem: google.maps.UnitSystem.METRIC,
      avoidHighways: false,
      avoidTolls: false
    }, function(response, status) {
        if (status !== 'OK') {
            $('#labadoer-eta').html("<i>Unavailable</i>");
            $('#labadoer-distance').html("<i>Unavailable</i>");
        } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            for (var i = 0; i < originList.length; i++) {
                var results = response.rows[i].elements;
                for (var j = 0; j < results.length; j++) {
                    $('#labadoer-eta').html(results[j].duration.text);
                    $('#labadoer-distance').html(results[j].distance.text);
                }
            }
        }
    });
}
  
function determineFullAddress(latlng, map) {
    var geocoder = new google.maps.Geocoder;
    geocoder.geocode({'location': latlng}, function(results, status) {
        if (status === 'OK' && results[0]) {
            address = results[0].formatted_address;
            $('#labadoer-address').html(address);
        } else {
            $('#labadoer-address').html("<i>Unavailable</i>");
        }
    });
}