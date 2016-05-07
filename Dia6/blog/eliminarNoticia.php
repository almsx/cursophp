<?php

//print_r($_POST);

//Array ( [idNoticiaApp] => 11 )
session_start();

if (isset($_SESSION['usuarioBlogApp'])) {

	include("../../utils/conexionDB.php");
	
	$idNoticiaApp = $_POST['idNoticiaApp'];
	
	$eliminarEntrada = "DELETE FROM noticiasBlog WHERE idNoticia = $idNoticiaApp";
	
	if(mysqli_query($dbcon, $eliminarEntrada)){
    	
    	echo "Noticia Eliminada Correctamente";
    	echo "<br/>";
    	echo "<a href='listarEntradas.php'>Ir al Administrador del Blog</a>";


	} else{
    	echo "Error en la consulta $eliminarEntrada. ";
	}



} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

}


?>
