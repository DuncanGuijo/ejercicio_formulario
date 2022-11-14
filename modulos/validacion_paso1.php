<?php

            //Declaramos variable
            $nombre =""; 

            //comprobamos si existe en session
            if(isset($_SESSION['nombre'])){
                $nombre = $_SESSION['nombre'];
                $_SESSION['nombre'] =recogerVar($nombre);
            }
        
            //comprobamos errores y si existe en post 
            if (isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $_SESSION['nombre'] =recogerVar($nombre);
           }

            //comprobamos si existe en get
            if (isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                $_SESSION['nombre'] = recogerVar($nombre);
                echo"<p> Error: Ingrese un nombre.<p>";
            }
                
            //apellidos
            $apellidos="";

            if (isset($_SESSION['apellidos'])){
                $apellidos =$_SESSION['apellidos'];
                $_SESSION['apellidos'] = recogerVar($apellidos);
            }

            if (isset($_POST['apellidos'])){
                $apellidos =$_POST['apellidos'];
                $_SESSION['apellidos'] = recogerVar($apellidos);
            }

            if (isset($_GET['apellidos'])){
                $apellidos =$_GET['apellidos'];
                $_SESSION['apellidos'] = recogerVar($apellidos);
                echo"<p> Error: Ingrese un apellido.<p>";

            }

            $apellidos2="";

            if (isset($_SESSION['apellidos2'])){
                $apellidos2 =$_SESSION['apellidos2'];
                $_SESSION['apellidos2'] = recogerVar($apellidos2);
            }

            if (isset($_POST['apellidos2'])){
                $apellidos2 =$_POST['apellidos2'];
                $_SESSION['apellidos2'] = recogerVar($apellidos2);
            }

            if (isset($_GET['apellidos2'])){
                $apellidos2 =$_GET['apellidos2'];
                $_SESSION['apellidos2'] = recogerVar($apellidos2);
                echo"<p> Error: Ingrese un segundo apellido.<p>";

            }

?>