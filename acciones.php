<?php
session_start();

include('config.php');
if (isset($_POST['token']) && $_POST['token']!=='') {

    if ($_POST['token'] == 'Registrar'){

        $nombres=$_POST['first_name'];
        $apellido=$_POST['last_name'];
        $correo=$_POST['email'];
        $pass=$_POST['password'];
        $passc=$_POST['password_confirmation'];

        $sql="INSERT INTO credencialesdeusuarios (nombreDeUsuario,correo,contrasena)
        VALUES ('".$nombres."','".$correo."','".$pass."')";

        if ($con->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
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
            echo "OK";

        } else {
            echo "NO";
        }
    }
}
    $con->close();
?>
