//Google Maps JS
//Set Map
function initMap() {
    var myLatlng = new google.maps.LatLng(50.0615991, 19.9373312);
    var imagePath = 'https://spokoloko.eu/img/logos/pin_map_hover.png';
    var mapOptions = {
        zoom: 13,
        center: myLatlng
    };
    var marker = new google.maps.Marker({
        map: map,
        position: myLatlng,
        draggable: true,
        anchorPoint: new google.maps.Point(0, -29)
    });

    var input = 'after beng';
    var geocoder = new google.maps.Geocoder();
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    var infowindow = new google.maps.InfoWindow();




        var map = new google.maps.Map(document.getElementById('map'), mapOptions);


        infowindow.setContent(place.formatted_address);
        infowindow.open(map, marker);


}