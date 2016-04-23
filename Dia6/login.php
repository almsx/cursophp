<?php

session_start();

include("../utils/conexionDB.php");


if (empty($_POST["UsApp"]) && empty($_POST["PsApp"])){

    echo "Vienen vacios o no iniciaste la sesión";
    echo "<br/>";
    echo "<a href=login.html>  Iniciar Sesion</a>";

} else {

        /*Iniciamos en la BD*/

        $usuario = $_POST['UsApp'];
        $password = $_POST['PsApp'];

        $view_users_query="SELECT * from usuarios WHERE usuario = "."'".$usuario."'"."AND password = "."'".$password."'"; 
        $run=mysqli_query($dbcon,$view_users_query);  

        while($row=mysqli_fetch_array($run)){

            $nombre=$row[3];    
            $_SESSION['nombreApp'] = $nombre;
           
        }

        if (isset($_SESSION['nombreApp'])) {
            
            echo "Bienvenido al Sistema ".$_SESSION['nombreApp'];
            echo "<a href=logout.php>  Cerrar Sesion</a>";
        
        } else {
            
            echo "Usuario Incorrecto, Intentar nuevamente.<br/>";
            echo "<a href=login.html>  Iniciar Sesion</a>";

        }



    
    
       
        


        
    


}


?>