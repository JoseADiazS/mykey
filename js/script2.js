/**
 * Main function of the application that executes when the HTML file loads the linked script
 * with the API Key
 */
function initMap() {


    var options = { //Configuration of the div that contains the Maps Application
        zoom: 10,
        center: {
            lat: 4.7110,
            lng: -74.0721
        }
    }
    var posicion = new google.maps.LatLng()
    var currentPosition; //Actual position of the Web browser, it is set in coordinates
    var marker1; //Initial marker fixed in the current position
    var marker2; //Second marker fixed in the current position, it has the draggable property

    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();

    var map = new google.maps.Map(document.getElementById('map'), options);
    directionsDisplay.setMap(map);

    function calcRoute() {
        var request = {
            origin: marker1,
            destination: marker2,
            travelMode: 'DRIVING'
        };
        directionsService.route(request, function (result, status) {
            if (status == 'OK') {
                directionsDisplay.setDirections(result);
            }
        });
    }

    //Div of the map Application

    /**
     * Adds a marker to the map, given an object with the specific coordinates
     * @param props Object with coordinates
     * @returns {google.maps.Marker} A marker displayed on the map
     */
    function addMarker(props) {
        var marker = new google.maps.Marker({
            position: props.coords,
            animation: google.maps.Animation.DROP,
            draggable: true,
            map: map
        });

        return marker;
    }

    /**
     * Gets coordinates of position object
     * @param position Object with a geolocation.
     * @returns {{coords: {lat: number, lng: number}}} Object with a position defined in coordinates
     */
    function getPos(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        return {
            coords: {
                lat: latitude,
                lng: longitude
            }
        };
    }

    window.onload = getMyLocation;

    /**
     * Initial function, executed when the Web Browser loads, this function request the user
     * to enable the gps service for obtain the current position of the device.
     */
    function getMyLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                currentPosition = getPos(position);
                console.log(currentPosition);
                marker1 = addMarker(getPos(position));
                marker2 = addMarker(getPos(position));

                google.maps.event.addListener(marker2, 'click', function () { // This function is executed when
                    // marker2 is clicked

                    var initAddress = getMarkerPos(marker1);
                    var finalAddress = getMarkerPos(marker2);

                    console.log(initAddress);
                    console.log(finalAddress);

                    var request = {
                        origin: initAddress.coords,
                        destination: finalAddress.coords,
                        travelMode: 'DRIVING'
                    };

                    directionsService.route(request, function (result, status) {
                        if (status == 'OK') {
                            directionsDisplay.setDirections(result);
                        }
                    });

                })
            })
        }
    };

    /**
     * Gets the position of a given marker
     * @param marker The given marker
     * @returns {{coords: {lat: *, lng: *}}} Object with coordinates
     */
    function getMarkerPos(marker) {
        var latitude = marker.getPosition().lat();
        var longitude = marker.getPosition().lng();
        return {
            coords: {
                lat: latitude,
                lng: longitude
            }
        };
    };
};
