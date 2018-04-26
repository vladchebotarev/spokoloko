//Google Maps JS
//Set Map

function bindDataToForm(address,lat,lng, number, website){
    document.getElementById('name').value = address;
    document.getElementById('lat').value = lat;
    document.getElementById('lng').value = lng;
    var nphone = number.replace("+48","");
    document.getElementById('phone').value = nphone;
    var nwebsite = website.replace("http://","");
    var nwebsite = nwebsite.replace("https://","");

    document.getElementById('website').value = nwebsite;
}


function initMap() {
    var myLatlng = new google.maps.LatLng(50.0615991, 19.9373312);
    var imagePath = 'https://spokoloko.eu/img/logos/pin_map_hover.png';
    var mapOptions = {
        zoom: 13,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatlng,
        zoom: 13
    });
    var input = document.getElementById('searchng');
    var geocoder = new google.maps.Geocoder();
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    var infowindow = new google.maps.InfoWindow();
    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }

        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var componentForm = {
            route: 'long_name',
            street_number: 'short_name',
            postal_code: 'long_name'

        };

        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
        var phone_number = place.formatted_phone_number;
        var website = place.website;

        bindDataToForm(place.name,place.geometry.location.lat(),place.geometry.location.lng(),phone_number, website);


        infowindow.setContent(place.formatted_address);
        infowindow.open(map, marker);

    });




    var marker = new google.maps.Marker({
        map: map,
        position: myLatlng,
        draggable: true,
        anchorPoint: new google.maps.Point(0, -29)
    });

    google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng(),'0', '-');
                    infowindow.setContent(results[0].formatted_address);
                    infowindow.open(map, marker);

                    for (var i = 0; i < place.address_components.length; i++) {
                        var addressType = place.address_components[i].types[0];
                        if (componentForm[addressType]) {
                            var val = place.address_components[i][componentForm[addressType]];
                            document.getElementById(addressType).value = val;
                        }
                    }

                }
            }
        });
    });








}