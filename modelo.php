<?php
include("modulos/sesion.php");//almacena los datos de la sesion
include("control/ctr.php");//acceso a las funciones del ctr

?>
<!DOCTYPE html>
    
    <!--Header Start-->
    <head>
    <?php include("modulos/header.php");?>
    </head>
    <!--Header End-->
    <title>Formulario con cockies y Post</title>

<body>
    <div id="container">
        <!-- cabecera -->
        <?php include ("modulos/cabecera.php") ?>
        <!-- fin cabecera -->
        <!-- navegacion -->
        <?php include ("modulos/nav.php") ?>
        <!-- fin navegacion> -->
        <div id="contenido">
                Contenido 
        </div>
    </div> 
</body>
</html>

