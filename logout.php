<?php
	session_start();

    //Comandos cierre de sesión
	if (isset($_SESSION['user_id'])) {
		session_destroy();
		header("location: index.php");
	}

?>
