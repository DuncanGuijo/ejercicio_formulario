<?php       
        echo "SESSION_ID:<br><br>" . session_id() . "<br><br>
              POST:<br><br>";
        
        foreach($_POST as $key => $valor){
            echo "<p>$key = $valor</p>";
        }

        echo "SESSION:<br>";
        
        foreach ($_SESSION as $key => $valor){
            echo"<p>$key =$valor</p>";
        }

        echo "GET:<br>";
        
        foreach ($_GET as $key => $valor){
            echo"<p>$key =$valor</p>";
        }

?>
