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

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPxUu1AacTervEEX5JzYYbX5V0LzKHEH4&callback=initMap"></script>
    <script src="js/script2.js" type="text/javascript"></script>

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
        <a href="espera.php" id="servicio">Pedir Servicio</a>
    </form>

</body>

</html>
