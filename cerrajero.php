<?php
/**
* Llamado al header.php
*/
require('header.php');
$estado = 3;
if (isset($_SESSION['estado'])){
    $estado = $_SESSION['estado'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>

<body>
    <!-- Container principal del cuerpo de la pagina -->
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <!-- Mensaje de bienvenida al usuario de tipo cerrajero -->
                        <h3 class="panel-title">Bienvenido seleccione su estado</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="cerrajero.php" id="estado">

                            <!-- diferentes estados del cerrajero -->
                            <div class="form-group">
                                <select name="estadod" class="form-control input-sm" id="estadod">
                                    <option value="3" <?php if ($estado ==3){echo "selected='selected'";}?>>Libre</option>
                                    <option value="4" <?php if ($estado ==4){echo "selected='selected'";}?>>En servicio</option>
                                    <option value="5" <?php if ($estado ==5){echo "selected='selected'";}?>>Apagado</option>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-info btn-block">Cambiar estado</button>
                            </div>
                            <input type="hidden" name="token" id="token" value="estado" />

                        </form>
                        <div id="msg"></div>
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
