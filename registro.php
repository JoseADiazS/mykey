<?php
//Llamado al header.php
require('header.php');
// Llamado a los datos para la conexion con la base de datos
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>My Key</title>
</head>

<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

   <!-- Container para el formulario para el registro de usuario -->
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido Por Favor Registrese</h3>
                    </div>

                    <!-- formulario de registro de usuario -->
                    <div class="panel-body">
                        <form role="form" method="post" id="reg">

                            <!-- Input type text donde se señalara el nombre del usuario -->
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nombre" required autofocus>
                            </div>
                            <!-- Input type number donde se señalara el telefono del usuario -->
                            <div class="form-group">
                                <input type="number" name="telefono" id="telefono" class="form-control input-sm" placeholder="Telefono" required autofocus>
                            </div>
                            <!-- Input type text donde se señalara la direccion del usuario -->
                            <div class="form-group">
                                <input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Direccion" required autofocus>
                            </div>
                            <!-- Input type email donde se señalara el correo electronico del usuario -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo" required autofocus>
                            </div>

                            <!-- Div donde se señalara la contraseña que sera utilizada por el usuario para la autenticacion con la pagina  -->
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirmar Contraseña" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="token" id="token" value="Registrar" />
                            <!-- button utilizado para la obtencion de los datos registrados en el formulario de registro -->
                            <button type="submit" class="btn btn-info btn-block">Registrarse</button>

                        </form>

                        <div id="msg">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Relacion con los scripts de jquery -->
    <script src="js/jquery.js"></script>
    <!-- Relacion con los scripts utilizados para la conexion con la base de datos -->
    <script src="js/script5.js"></script>
</body>

</html>
