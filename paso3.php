<?php
include("modulos/sesion.php");
include("control/ctr.php");
?>

<!DOCTYPE html>
<html>
    <!--Header Start-->
    <head>
    <?php include("modulos/header.php");?>
    <title>Confirmación</title>
    </head>
    <!--Header End-->
  <body>
    <div id="container">
        <!-- cabecera -->
        <?php include ("modulos/cabecera.php");?>
        <!-- fin cabecera -->
        <!-- navegacion -->
        <?php include ("modulos/nav.php");?>
        <!-- fin navegacion> -->

        <!--VALIDACION PASO 3 START-->
        <?php include("modulos/validacion_paso3.php");?> 
        <!--VALIDACION PASO 3 END -->

        <!--ID VALORES START-->
        <?php include("modulos/id_valores.php");?>
        <!--ID VALORES END-->

        <?php

        echo "Estimado/a: $nombre $apellidos.<br>
              Confirmamos la entrega en la dirección: $direccion.<br>
              Observaciones: $observaciones<br>";
    ?>
    </div> 

</body>
</html>