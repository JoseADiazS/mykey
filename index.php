<?php
require('header.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>

<body>
    <div id="map"></div>
    <style>
        #map {
            height: 400px;
            width: 400px;
        }

    </style>
    <script src="js/script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChTzXzJ1CWsrWn51ke7cXcu-2-fBqmy_I&callback=initMap"></script>
    <form action="#" method="post">
        <select name="tipoDoc" class="opciones">
            <option>Apertura de puerta</option>
            <option>Apertura de puerta de seguridad</option>
            <option>Apertura de Auto</option>
            <option>Cambio de cerradura</option>
            <option>Cambio de cerradura de seguridad</option>
            <option>Cambio de cerradura para autos</option>
            <option>Arreglo cerradura</option>
            <option>Arreglo cerradura de seguridad</option>
            <option>Arreglo cerradura para autos</option>
        </select>
        <input type="submit" value="Pedir Servicio">
    </form>

</body>

</html>
