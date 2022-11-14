<?php session_start();
if (!isset($_SESSION['IP'])){
    header("location:modulos/caducada.php");
    exit;
}
?>