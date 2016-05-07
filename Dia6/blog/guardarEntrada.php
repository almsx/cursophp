<?php

//print_r($_POST);
/*


Array ( [fechaPublicacion] => 2016-05-07 [tituloNoticia] => sss [textoPublicacion] => sjjsjs [resumenPublicacion] => 889939933 [categoriaPublicacion] => 2 )
*/

session_start();

if (isset($_SESSION['usuarioBlogApp'])) {

	include("../../utils/conexionDB.php");
	
	$fechaPub = $_POST['fechaPublicacion'];
	$tituloPub = $_POST['tituloNoticia'];
	$resumenPub = $_POST['resumenPublicacion'];
	$publicacionCompleta = $_POST['textoPublicacion'];
	$categoPub = $_POST['categoriaPublicacion'];
	$idAutor = $_SESSION['idAutorBlogApp'];
	
	$insertarEntrada = "INSERT INTO noticiasBlog (fechaPublicacion,tituloPublicacion,resumenPublicacion,publicacionCompleta,usuarioPublica,categoriaPublica) VALUES ('$fechaPub','$tituloPub','$resumenPub','$publicacionCompleta','$idAutor','$categoPub')";
	
	if(mysqli_query($dbcon, $insertarEntrada)){
    	echo "Publicación Correcta";
    	echo "<br/>";
    	echo "<a href='panel.php'>Ir al Administrador del Blog</a>";


	} else{
    	echo "Error en la consulta $sql. ";
	}



} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

}



?>
