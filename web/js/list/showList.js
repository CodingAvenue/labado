$("#laundry-list").on('click','.laundry-header',function(){
    var placeId = $(this).data('target');
    var theUrl = "laundryshop/"+placeId+"/details";
    var body=$(this).next('.collapsible-body');
    $.ajax({
    url: theUrl,
    success: function(data){
        body.html(data);
        console.log($(this).next('.collapsible-body'));
    },
    });

});


if(navigator.geolocation){
    var option = {
        enableHighAccuracy: true,
        timeout: Infinity,
        maximumAge: 0
    };
        
navigator.geolocation.watchPosition(success, failure, option);

}       
       
    var map,service,display="";
    var listShop = [];
    var lastIndex = 0;
    var limit = 5;

function success(position){
    var mylat = position.coords.latitude;
    var mylong = position.coords.longitude;
    var coords = new google.maps.LatLng(mylat,mylong);
        
    var mapOptions = {
        zoom: 20,
        center: coords,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.createElement('div'));    
    service = new google.maps.places.PlacesService(map);
    var requirements = {
            location: coords,
            radius: 800,
            types: ['laundry'],                
    };
    service.nearbySearch(requirements, callback); 
        
}

function renderList(laundry_shops){
    var ul_id = $('#laundry-list');            
        laundry_shops.map(function(laundry){                    
        var row = '<li><div class="laundry-header collapsible-header" data-target='+laundry.place_id
        +'><i class="material-icons">local_laundry_service</i><p><span>'+laundry.name+'</span><span id="vici">'
        +laundry.vicinity+'</span></p></div><div class="collapsible-body"></div></li>';
        ul_id.append(row);
    });
}

function callback(results, status){                  
    if(status == google.maps.places.PlacesServiceStatus.OK){
        listShop = results;          
        $('#load-page').hide();
        $('#list-container').show();
        renderList(results);                        
    }
}

function failure(){
    $('#load-page').hide();
    $('#unable-to-detect').show();
}  
