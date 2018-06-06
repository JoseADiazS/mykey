<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!--Nombre de la pagina -->
    <title>My Key</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Relacion de estilos con bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Relacion de scripts con jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Relacion de scripts con bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Key</a>
            </div>
            <ul class="nav navbar-nav">

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nosotros <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Historia</a></li>
                        <li><a href="#">Visión</a></li>
                        <li><a href="#">Misión</a></li>
                    </ul>
                </li>
                <li><a href="solicitar-servicio.php">Solicitar Servicio</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['user_id']) && $_SESSION!==null){
                        echo '<li><a><span class="glyphicon glyphicon-user"></span>'.$_SESSION['name'].'</a></li>';
                        echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>';
                    }else{
                        echo '<li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>';
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>

</body>

</html>
