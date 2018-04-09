function initMap() {
    var myLatlng = new google.maps.LatLng($("#city").attr('lat'),$("#city").attr('lng'));

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: myLatlng,
        disableAutoPan: false
    });

    var infoWindow = new google.maps.InfoWindow;
    var bounds = new google.maps.LatLngBounds();

    // Change this depending on the name of your PHP or XML file

    downloadUrl(function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {
            var id_local = markerElem.getAttribute('id');
            var url_local = markerElem.getAttribute('url_venue');
            var name = markerElem.getAttribute('name');
            var address = markerElem.getAttribute('address');
            var image_url = markerElem.getAttribute('image');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

            var infowincontent = document.createElement('a');
            infowincontent.setAttribute('href', '../venue/'+url_local);
            infowincontent.setAttribute('target','_blank');
            infowincontent.style.color = '#333';

            var oImg = document.createElement('img');
            oImg.setAttribute('src', '../../images/venues/'+image_url);
            oImg.setAttribute('alt', 'picture');
            oImg.setAttribute('width', '200px');
            infowincontent.appendChild(oImg);

            infowincontent.appendChild(document.createElement('br'));
            infowincontent.appendChild(document.createElement('br'));

            var strong = document.createElement('strong');
            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            text.textContent = address
            infowincontent.appendChild(text);


            var marker = new google.maps.Marker({
                map: map,
                icon: 'https://spokoloko.eu/img/logos/pin_map.png',
                animation: google.maps.Animation.DROP,
                position: point
            });
            var loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
            bounds.extend(loc);
            //marker.addListener('click', function() {
            //infoWindow.setContent(infowincontent);
            //infoWindow.open(map, marker);
            //});


            google.maps.event.addListener(marker, 'mouseover', function() {
                marker.setIcon('https://spokoloko.eu/img/logos/pin_map_hover.png');
            });

            google.maps.event.addListener(marker, 'mouseout', function() {
                marker.setIcon('https://spokoloko.eu/img/logos/pin_map.png');
            });

            $('#local_'+id_local).mouseover(function() {
                marker.setIcon('https://spokoloko.eu/img/logos/pin_map_hover.png');
            });

            $('#local_'+id_local).mouseout(function() {
                marker.setIcon('https://spokoloko.eu/img/logos/pin_map.png');
            });

            google.maps.event.addListener(marker, 'click', function() {
                if(!marker.open){
                    infoWindow.setContent(infowincontent);
                    infoWindow.open(map,marker);
                    marker.open = true;
                }
                else{
                    infoWindow.close();
                    marker.open = false;
                }
                google.maps.event.addListener(map, 'click', function() {
                    infoWindow.close();
                    marker.open = false;
                });
            });

        });

        //map.fitBounds(bounds); //auto-zoom
        map.panToBounds(bounds); //auto-center



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

function downloadUrl(callback) {

    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.open('POST', '../venues_map/'+$("#search_form").attr('action'), true);

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
    request.send($("#search_form").serialize());
}


function doNothing() {}


