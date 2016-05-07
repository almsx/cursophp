<?php

//print_r($_POST);

//Array ( [idNoticiaApp] => 11 )
session_start();

if (isset($_SESSION['usuarioBlogApp'])) {

	include("../../utils/conexionDB.php");
	
	
	$idNoticiaApp = $_POST['idNoticiaApp'];
	
	$listarEntrada = "SELECT * FROM noticiasBlog WHERE idNoticia = $idNoticiaApp";
	//echo "Actualizare ".$listarEntrada;
	
	$run=mysqli_query($dbcon,$listarEntrada);  
  
    while($row=mysqli_fetch_array($run)) { 

    	$idNoticia = $row[0];
    	$tituloNoticia = $row[2];
    	$resumeNoticia = $row[3];
    	$compleNoticia = $row[4];


?>
<form action="actualizarEntrada.php" method="POST">
		<input type="hidden" name="idNoticiaApp" value='<?php echo $idNoticia; ?>' />
        Titulo Noticia: 
		<br/>
		<input type="text" name="tituloNoticia" value="<?php  echo $tituloNoticia ?>"></input>
		<br/>
		Texto Publicación:
		<br/> <input type="text" name="textoPublicacion" value="<?php  echo $resumeNoticia  ?>"></input>
		<br/>
		Resumen Publicación: 
		<br/>
		<input type="text" name="resumenPublicacion" value="<?php echo $compleNoticia   ?>"></input>
		<br/>
		<br/>
		<input type="submit" value="Actualizar Articulo"></input>
		
</form>



<?php
}
} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

}


?>
