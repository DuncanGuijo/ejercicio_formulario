<?php

$nombre =""; 
$apellidos="";
$apellidos2="";

        //NOMBRE
        if (isset($_GET['nombre']) && empty($_SESSION['nombre'])){
            $nombre = $_GET['nombre'];
            $_SESSION['nombre'] = recogerVar($nombre);
            echo"<p> Error: Ingrese un nombre.<p>";
        }

        if(isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
            $nombre = $_SESSION['nombre'];
            $_SESSION['nombre'] =recogerVar($nombre);
        }
        
        if (isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $_SESSION['nombre'] =recogerVar($nombre);
       }

       //APELLIDOS
        if (isset($_GET['apellidos'])  && empty($_SESSION['apellidos'])){
            $apellidos =$_GET['apellidos'];
            $_SESSION['apellidos'] = recogerVar($apellidos);
            echo"<p> Error: Ingrese un apellido.<p>";
        }

        if (isset($_SESSION['apellidos']) && !empty($_SESSION['apellidos'])){
            $apellidos =$_SESSION['apellidos'];
            $_SESSION['apellidos'] = recogerVar($apellidos);
        }

        if (isset($_POST['apellidos'])){
            $apellidos =$_POST['apellidos'];
            $_SESSION['apellidos'] = recogerVar($apellidos);
        }

        //APELLIDOS2
        if (isset($_GET['apellidos2']) && empty($_SESSION['apellidos2'])){
            $apellidos2 =$_GET['apellidos2'];
            $_SESSION['apellidos2'] = recogerVar($apellidos2);
            echo"<p>Error: Ingrese un segundo apellido<p>";
        }

        if (isset($_SESSION['apellidos2']) && !empty($_SESSION['apellidos2'])){
            $apellidos2 =$_SESSION['apellidos2'];
            $_SESSION['apellidos2'] = recogerVar($apellidos2);
        }

        if (isset($_POST['apellidos2'])){
            $apellidos2 =$_POST['apellidos2'];
            $_SESSION['apellidos2'] = recogerVar($apellidos2);
        }
        
?>