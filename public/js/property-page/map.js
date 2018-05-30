//Google Maps JS
//Set Map
function initMap() {
    var myLatlng = new google.maps.LatLng($("#lat").val(),$("#lng").val());
    var imagePath = 'https://res.cloudinary.com/spokoloko/image/upload/v1/app/map/pin_map.png';
    var mapOptions = {
        zoom: 13,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var markers = [
        {'lat': $("#lat").val(), 'lng': $("#lng").val()}
    ];

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    //Add Markers
    markers.forEach(function(marker) {

        var location = new google.maps.LatLng(marker.lat, marker.lng);

        new google.maps.Marker({
            position: location,
            map: map,
            icon: imagePath
        });
    });

    //Resize Function
    google.maps.event.addDomListener(window, "resize", function() {
        setTimeout(function(){
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        }, 300);

    });

}