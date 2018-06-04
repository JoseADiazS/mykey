/**
 * Main function of the application that executes when the HTML file loads the linked script
 * with the API Key
 */

function initMap() {

    var latitud = 4.3634;
    var longitud = -74.1;

    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: latitud,
            lng: longitud
        },
        zoom: 16,
    });
    /*

    */

    var marker = new google.maps.Marker({
        position: {
            lat: latitud,
            lng: longitud
        },
        map: map
    });

    marker.setMap(map);

    document.getElementById("servicio").onclick(function() {
        var markerPosicionReal = new google.maps.Marker({
            position:{
                lat: 4.3634,
                lng: -74.2
            },
            map:map,
            draggable:true
        })

        markerPosicionReal.setMap(map);
        });
    /*
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (
                position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                latitud = pos.lat
                longitud = pos.lng
                map.setCenter(pos);
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        };
    }
    */
}
