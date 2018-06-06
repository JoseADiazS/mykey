<?php
session_start();
require('header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
</head>

<body>

    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido Por Favor Ingrese</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" id="login">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo">
                            </div>


                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
                            </div>

                            <input type="hidden" name="token" id="token" value="Login"/>
                            <button type="submit"  class="btn btn-info btn-block" >Ingresar</button>

                        </form>
                        <div id="msg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/script5.js"></script>
</body>

</html>
