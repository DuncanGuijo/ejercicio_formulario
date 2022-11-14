<?php 
            //NOMBRE
            $nombre =""; 

            if (isset($_SESSION['nombre'])){
                $nombre = $_SESSION['nombre'];
                $_SESSION['nombre'] =recogerVar($nombre);
            }

            if (isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $_SESSION['nombre'] =recogerVar($nombre);
            }

            if (isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                $_SESSION['nombre'] =recogerVar($nombre);
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
            }


            //DIRECCION
            $direccion ="";
            if (isset($_SESSION['direccion'])){
                $direccion =$_SESSION['direccion'];
                $_SESSION['direccion'] = recogerVar($direccion);
            }

            if (isset($_POST['direccion'])){
                $direccion =$_POST['direccion'];
                $_SESSION['direccion'] = recogerVar($direccion);
            }

            if (isset($_GET['direccion'])){
                $direccion =$_GET['direccion'];
                $_SESSION['direccion'] = recogerVar($direccion);
            }


            //OBSERVACIONES
            $observaciones="";
            if (isset($_SESSION['observaciones'])){
                $observaciones =$_SESSION['observaciones'];
                $_SESSION['observaciones'] = recogerVar($observaciones);
            }

            if (isset($_POST['observaciones'])){
                $observaciones =$_POST['observaciones'];
                $_SESSION['observaciones'] = recogerVar($observaciones);
            }

            if (isset($_GET['observaciones'])){
                $observaciones =$_GET['observaciones'];
                $_SESSION['observaciones'] = recogerVar($observaciones);
            }
        ?> 