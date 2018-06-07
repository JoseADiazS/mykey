<?php
/**
* Llamado al header.php
*/
require('header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
</head>

<body>
    <!-- Container para todo el documento -->
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido Por Favor Ingrese</h3>
                    </div>
                    <div class="panel-body">
                       <!-- formulario de inicio de sesion -->
                        <form role="form" method="post" id="login">
                            <!-- solicitud del email registrado para el inicio de sesion -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo">
                            </div>
                            <!-- solicitud de la contraseña registrada para el inicio de sesion -->
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
                            </div>

                            <input type="hidden" name="token" id="token" value="Login" />
                            <!-- button para la obtencion de los datos registrados en el formulario de inicio de sesion -->
                            <button type="submit" class="btn btn-info btn-block">Ingresar</button>

                        </form>
                        <div id="msg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- relacion con los scripts de jquery -->
    <script src="js/jquery.js"></script>
    <!-- relacion con los scripts para la conexion con la base de datos -->
    <script src="js/script5.js"></script>
</body>

</html>
