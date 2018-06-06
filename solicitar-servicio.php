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


    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido seleccione su servicio</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="espera.php" id="servicio">
                            <div class="form-group">
                                <select name="tipoDoc" class="form-control input-sm">
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
                                <br>
                                <button type="submit" class="btn btn-info btn-block">Pedir servicio</button>
                            </div>

                        </form>
                        <div id="msg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
