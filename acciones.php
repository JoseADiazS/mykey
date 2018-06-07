<?php
session_start();

include('config.php');
if (isset($_POST['token']) && $_POST['token']!=='') {

    if ($_POST['token'] == 'Registrar'){

        $nombre=$_POST['first_name'];
        $direc=$_POST['direccion'];
        $tel=$_POST['telefono'];
        $correo=$_POST['email'];
        $pass=$_POST['password'];
        $passc=$_POST['password_confirmation'];


        $sql="SELECT * from  credencialesdeusuarios WHERE correo = '".$correo."' OR nombreDeUsuario = '".$nombre."'";
        $resultado = $con ->query($sql);

        if (mysqli_num_rows($resultado) == 0){
            $sql="INSERT INTO credencialesdeusuarios (nombreDeUsuario,correo,contrasena)
        VALUES ('".$nombre."','".$correo."','".$pass."')";

            if ($con->query($sql) === TRUE) {
                $last_id = $con->insert_id;
                $sql2="INSERT INTO usuario (Nombre,telefono,direccion,suspendido, credencialesDeUsuarios_idcredencialesDeUsuarios)
        VALUES ('".$nombre."','".$tel."','".$direc."',1,'".$last_id."')";

                if($con->query($sql2) === TRUE){
                    echo "OK";
                }else{
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }

        }else{
            echo "YA";
        }

    }


    if ($_POST['token'] == 'Login'){
        $correo=$_POST['email'];
        $pass=$_POST['password'];


        $sql="SELECT * from  credencialesdeusuarios WHERE correo = '".$correo."' ";
        $resultado = $con ->query($sql);
        $row = mysqli_fetch_assoc($resultado);

        if ($pass==$row['contrasena']) {
            $_SESSION['user_id'] = $row['idcredencialesDeUsuarios'];
            $_SESSION['name'] = $row['nombreDeUsuario'];
            $_SESSION['rol'] = "A";

             $sql2="SELECT * from  cerrajero WHERE credencialesDeUsuarios_idcredencialesDeUsuarios = '".$row['idcredencialesDeUsuarios']."' ";
            $resultado2 = $con ->query($sql2);
            if (mysqli_num_rows($resultado2) == 1){
                $_SESSION['rol'] = "C";
                $row2 = mysqli_fetch_assoc($resultado2);
                $_SESSION['estado'] = $row2['estado'];
            }

                $sql3="SELECT * from  usuario WHERE credencialesDeUsuarios_idcredencialesDeUsuarios = '".$row['idcredencialesDeUsuarios']."' ";
                $resultado3 = $con ->query($sql3);
            if (mysqli_num_rows($resultado3) == 1){
                $_SESSION['rol'] = "U";
            }
            echo "OK";

            }else {
            echo "NO";
            }
        }


    if ($_POST['token'] == 'cerrajero'){
        $nombre=$_POST['first_name'];
        $direc=$_POST['direccion'];
        $tel=$_POST['telefono'];
        $correo=$_POST['email'];
        $pass=$_POST['password'];


       $sql="SELECT * from  credencialesdeusuarios WHERE correo = '".$correo."' OR nombreDeUsuario = '".$nombre."'";
        $resultado = $con ->query($sql);

        if (mysqli_num_rows($resultado) == 0){
            $sql="INSERT INTO credencialesdeusuarios (nombreDeUsuario,correo,contrasena)
        VALUES ('".$nombre."','".$correo."','".$pass."')";

            if ($con->query($sql) === TRUE) {
                $last_id = $con->insert_id;
                $sql2="INSERT INTO cerrajero (nombre,direccion,telefono,estado, credencialesDeUsuarios_idcredencialesDeUsuarios)
        VALUES ('".$nombre."','".$direc."','".$tel."',1,'".$last_id."')";

                if($con->query($sql2) === TRUE){
                    echo "OK";
                }else{
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }

        }else{
            echo "YA";
        }

    }


    if ($_POST['token'] == 'estado'){
        $estado=$_POST['estadod'];

        $sql="UPDATE cerrajero set estado = ".$estado." where credencialesDeUsuarios_idcredencialesDeUsuarios = ".$_SESSION['user_id']."";

            if ($con->query($sql) === TRUE) {
                $_SESSION['estado'] = $estado;
                    echo "OK";
                }else{
                    echo "Error: " . $sql . "<br>" . $con->error;
                }

        }

}
    $con->close();
?>
