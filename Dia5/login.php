<?php  

session_start();

if(!$_SESSION['nombreApp'])
{

    header("Location: formulario.html");
    
}  
        $usuario = $_POST['Username'];
        $password = $_POST['Password'];

        include("conexionDB.php");
        $view_users_query="SELECT * from usuarios WHERE usuario = "."'".$usuario."'"."AND password = "."'".$password."'"; 
        $run=mysqli_query($dbcon,$view_users_query);  
  
        while($row=mysqli_fetch_array($run))  
        {  
            $nombre=$row[3];  
            
            echo $nombre;
            $_SESSION['nombreApp'] = $nombre;
            echo "<a href=logout.php>  Cerrar Sesion</a>";
        }


?>  
