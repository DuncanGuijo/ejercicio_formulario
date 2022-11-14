<?php
include("modulos/sesion.php");//llamos al archivo sesion
include("control/ctr.php");//llamamos a funciones

?>

<!DOCTYPE html>
<html>
    <!--Header Start-->
    <head>
    <?php include("modulos/header.php");?>
    <title>Paso2</title>
    </head>
    <!--Header End-->

<body>
    <div id="container">
        <!-- cabecera -->
        <?php include ("modulos/cabecera.php"); ?>
        <!-- fin cabecera -->
        <!-- navegacion -->
        <?php include ("modulos/nav.php");?>
        <!-- fin navegacion> -->
        
        
        <!--VALIDACION PASO 2 START-->
        <?php include("modulos/validacion_paso2.php");?>
        <!--VALIDACION PASO 2 END-->


        <!--FORMULARIO START-->
        <div id="contenido">
        <form name="form1" action="paso3.php" method="POST" class="formulario">
            <fieldset>
                <input type="hidden" id="nombre" value="<?php echo $nombre;?>">
                <input type="hidden" id="apellidos" value="<?php echo $apellidos;?>">
                <input type="hidden" id="apellidos2" value="<?php echo $apellidos2;?>">
                <label for="direccion">Dirección:</label>
                <input type="text" class="input" id="direccion" name="direccion" value="<?php echo $direccion;?>"><br><br>
                <label for="observaciones">Observaciones:</label>
                <input type="text" class="input" id="observaciones" name="observaciones" value="<?php echo $observaciones;?>"><br><br>
                <input type="submit" class="button" name="submit" value="submit">
            </fieldset>
        </form> 
        </div>
        <!--FORMULARIO END-->


        <!--ID VALORES START-->
        <?php include("modulos/id_valores.php");?>
        <!--ID VALORES END-->
    </div> 

</body>
</html>