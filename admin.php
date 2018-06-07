<?php
    require('header.php')

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- Llamado al archivo css con los styles utilizados por la pagina -->
        <link rel="stylesheet" href="css/style.css">
        <title>Registro Cerrajeros</title>
    </head>

    <body>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <!-- Container con el cuerpo del documento -->
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Registro de cerrajeros</h3>
                        </div>

                        <!-- formulario registro de cerrajero -->
                        <div class="panel-body">
                            <form role="form" method="post" id="cerrajero">

                                <!-- Input type text donde se señalara el nombre del cerrajero -->
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nombre" required autofocus>
                                </div>
                                <!-- Input type text donde se señalara la direccion del cerrajero-->
                                <div class="form-group">
                                    <input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Direccion" required autofocus>
                                </div>
                                <!-- Input type number donde se señalara el telefono del cerrajero -->
                                <div class="form-group">
                                    <input type="number" name="telefono" id="telefono" class="form-control input-sm" placeholder="Telefono" required autofocus>
                                </div>
                                <!-- Input type email donde se señalara el correo electronico del cerrajero -->
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo" required autofocus>
                                </div>

                                <!-- div que contedra los espacios donde se señalara la contraseña que se asignara al cerrajero -->
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
                                <input type="hidden" name="token" id="token" value="cerrajero" />
                                <!-- boton que se utilizara para obtener los datos del cerrajero al completar el formulario -->
                                <button type="submit" class="btn btn-info btn-block">Registrar Cerrajero</button>
                                 <a href="cerrajeros.php" class="btn btn-danger btn-block" role="button">Cancelar</a>
                            </form>
                            <div id="msg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- llamado al script jquery -->
        <script src="js/jquery.js"></script>
        <!-- llamado al script para la obtencion de datos y relacion con la base de datos -->
        <script src="js/script5.js"></script>
    </body>

    </html>
