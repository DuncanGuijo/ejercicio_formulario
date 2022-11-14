<?php 
//EL FALLO ESTA EN ESTE PASO
//DECLARAMOS VARIBALES FUERA DEL SUBMIT
$nombre =""; 
$apellidos="";
$apellidos2="";
$observaciones="";
$direccion="";

//SI SE PULSA SUBMIT
//if (isset($_POST['submit'])){

    //nombre

    if (isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        $_SESSION['nombre'] =recogerVar($nombre);
    }

    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $_SESSION['nombre'] = recogerVar($nombre);
    }

    if (isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        $_SESSION['nombre'] =recogerVar($nombre);
    
    }

    
    if(empty($nombre)){
        $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
        header("location:$url");
        exit;
    }

    //apellidos
    if (isset($_POST['apellidos'])){
        $apellidos = $_POST['apellidos'];
        $_SESSION['apellidos'] = recogerVar($apellidos);
    }

    if (isset($_SESSION['apellidos'])){
        $apellidos =$_SESSION['apellidos'];
        $_SESSION['apellidos'] = recogerVar($apellidos);
    }

    if (isset($_GET['apellidos'])){
        $apellidos =$_GET['apellidos'];
        $_SESSION['apellidos'] = recogerVar($apellidos);
    }
    
    if(empty($apellidos)){
        $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
        header("location:$url");
        exit;
    }

    //apellidos2
    if (isset($_SESSION['apellidos2'])){
        $apellidos2 =$_SESSION['apellidos2'];
        $_SESSION['apellidos2'] = recogerVar($apellidos2);
    }

    if (isset($_POST['apellidos2'])){
        $apellidos2 = $_POST['apellidos2'];
        $_SESSION['apellidos2'] = recogerVar($apellidos2);
    }

    
    if (isset($_GET['apellidos2'])){
        $apellidos2 =$_GET['apellidos2'];
        $_SESSION['apellidos2'] = recogerVar($apellidos2);
    }
    
    if(empty($apellidos2)){
        $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
        header("location:$url");
        exit;
    }

    //DIRECCION
    /*
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
    
    if(empty($direccion)){
        $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
        header("location:$url");
        exit;
    }

    //OBSERVACIONES
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
    
    if(empty($observaciones)){
        $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
        header("location:$url");
        exit;
    }*/
//} 


if(empty($nombre)){
    $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
    header("location:$url");
    exit;
}
/*
if(empty($direccion)){
    $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
    header("location:$url");
    exit;
}
*/
if(empty($apellidos)){
    $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
    header("location:$url");
    exit;
}

if(empty($apellidos2)){
    $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
    header("location:$url");
    exit;
}
/*
if(empty($observaciones)){
    $url = "paso1.php?nombre=$nombre&apellidos=$apellidos&apellidos2=$apellidos2";
    header("location:$url");
    exit;
}
*/
?>