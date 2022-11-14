<?php
session_start();
$_SESSION['IP']=$_SERVER['REMOTE_ADDR'];
include("control/ctr.php");?>
<!DOCTYPE html>
<html>
    <!--Header Start-->
    <head>
    <?php include("modulos/header.php");?>
    <title>Paso1</title>
    </head>
    <!--Header End-->

<body>
    <div id="container">
        <!-- cabecera -->
        <?php include ("modulos/cabecera.php") ?>
        <!-- fin cabecera -->
        <!-- navegacion -->
        <?php include ("modulos/nav.php") ?>
        <!-- fin navegacion> -->

        <!--VALIDACION PASO 1 START-->
        <?php include("modulos/validacion_paso1.php");?>
        <!--VALIDACION PASO 1 END-->

        <!--FORMULARIO START-->
        <div id="contenido">
        <form name="form1" action="paso2.php" method="POST" class="formulario">
            <fieldset>
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>" placeholder="Nombre"/><br><br>
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" class="input" name="apellidos" value="<?php echo $apellidos;?>" placeholder="1er Apellido" />
                <input type="text" id="apellidos" class="input" name="apellidos2" value="<?php echo $apellidos2;?>" placeholder="2do Apellido" /><br><br>
                <input type="submit"  class="button" name="submit" value="submit">
            </fieldset>
        </form> 
        </div>
    </div>
        <!--FORMULARIO END-->
        
        <!--ID VALORES START-->
        <?php

            include("modulos/id_valores.php");
        ?>
        <!--ID VALORES END-->

    </div> 
</body>
</html>

