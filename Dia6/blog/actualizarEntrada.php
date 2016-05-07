<?php

/*

print_r($_POST);
Array ( [idNoticiaApp] => 12 [tituloNoticia] => Publicación iPhone 5 [textoPublicacion] => Lorem Impsum [resumenPublicacion] => Lorem Ipsum es simplemente e;

*/

session_start();

if (isset($_SESSION['usuarioBlogApp'])) {

	include("../../utils/conexionDB.php");
	
	$tituloPub = $_POST['tituloNoticia'];
	$resumenPub = $_POST['resumenPublicacion'];
	$publicacionCompleta = $_POST['textoPublicacion'];
	$idPublicacion = $_POST['idNoticiaApp'];
	
	$actualizarEntrada = "UPDATE noticiasBlog SET tituloPublicacion = '$tituloPub', resumenPublicacion = '$resumenPub', publicacionCompleta = '$publicacionCompleta' WHERE idNoticia = $idPublicacion";
	
	if(mysqli_query($dbcon, $actualizarEntrada)){
    	
    	echo "Actualización Correcta del Articulo";
    	echo "<br/>";
    	echo "<a href='listarEntradas.php'>Ir al Administrador del Blog</a>";


	} else{
    	echo "Error en la consulta $actualizarEntrada. ";
	}



} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

}



?>
