<?php

/*Administrador del Blog*/
session_start();

if (isset($_SESSION['usuarioBlogApp'])) {
            
	echo "Bienvenido al Administrador del Blog ".$_SESSION['usuarioBlogApp'];
   
        
} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

    }


?>