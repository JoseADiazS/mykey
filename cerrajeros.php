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
    <title>Inicio</title>
</head>

<body>
    <!-- Container principal del cuerpo de la pagina -->
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2">
                  <h1>Cerrajeros</h1>
                  <a href="admin.php" class="btn btn-info" role="button">Crear</a>
                   <table class="table">
    <thead>
  <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
     <?php

        include('config.php');
        $sql="SELECT * from  cerrajeros";
        $resultado = $con ->query($sql);
        $result = mysqli_fetch_assoc($resultado);
        if (mysqli_num_rows($resultado) == 0){
            echo '<tr><td colspan="5"No hay informacion</td></tr>';
        }else{


            foreach($result as $row){

                echo '<tr>';
                echo '<td>'.$row['idcerrajero'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['direccion'].'</td>';
                echo '<td>'.$row['telefono'].'</td>';
                if ( $row['estado'] == 1){
                   echo '<span class="label label-primary">Activo</span>';
                }else if($row['estado'] == 2){
                    echo '<span class="label label-danger">Suspendido</span>';
                }else if($row['estado'] == 3){
                   echo '<span class="label label-success">Libre</span>';
                }else if($row['estado'] == 4){
                    echo '<span class="label label-info">En servicio</span>';
                }else if($row['estado'] == 5){
                    echo '<span class="label label-default">Warning Label</span>';
                }
                echo '</tr>';
            }

        }


        ?>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
            </div>
        </div>
    </div>
        <!-- Relacion con los scripts de jquery -->
    <script src="js/jquery.js"></script>
    <!-- Relacion con los scripts utilizados para la conexion con la base de datos -->
    <script src="js/script5.js"></script>
</body>

</html>
