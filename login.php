<?php
require('header.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
</head>

<body>

    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Correo:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Correo">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Contraseña">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Recordarme</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Entrar</button>
            </div>
        </div>
    </form>
</body>

</html>
