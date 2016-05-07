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
	echo "El id de Autor es ".$idAutor;

	//$view_users_query="SELECT * from categoriasBlog ORDER BY nombreCategoria ASC";
	$insertarEntrada = "INSERT INTO noticiasBlog ('fechaPublicacion','tituloPublicacion','resumenPublicacion','publicacionCompleta','usuarioPublica','categoriaPublica') VALUES ('$fechaPub','$tituloPub','$resumenPub','$publicacionCompleta','$idAutor','$categoPub')";

	echo $insertarEntrada;

	//INSERT INTO `categoriasBlog` (`idCategoria`, `nombreCategoria`) VALUES (NULL, 'Ciencia');

    //$run=mysqli_query($dbcon,$view_users_query);  




} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

}



?>
