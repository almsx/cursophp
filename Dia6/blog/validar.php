<?php

session_start();

include("../../utils/conexionDB.php");


if (empty($_POST["userBlog"]) && empty($_POST["passBlog"])){
    /*Opcion 1, inidicar al Usuario loguearse*/
    echo "Sesión no inicializada.";
    echo "<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";
    

} else {

        /*Iniciamos en la BD*/

        $usuario = $_POST['userBlog'];
        $password = $_POST['passBlog'];

        $view_users_query="SELECT * from usuariosBlog WHERE usuario = "."'".$usuario."'"."AND password = "."'".$password."'"; 
        $run=mysqli_query($dbcon,$view_users_query);  

        while($row=mysqli_fetch_array($run)){

            $nombre=$row[3];
            $idAutor=$row[0];    
            $_SESSION['usuarioBlogApp'] = $nombre;
            $_SESSION['idAutorBlogApp'] = $idAutor;
           
        }

        if (isset($_SESSION['usuarioBlogApp'])) {
            
            header("Location: panel.php");
   
        
        } else {
            
            echo "Usuario no existe, favor de verificar.<br/>";
            echo "<a href=login.html>  Iniciar Sesion</a>";

        }

}


?>