<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar Entrada</title>
</head>
<body>
	
	<form action="guardarEntrada.php" method="POST">
		Fecha: <input type="text" name="fechaPublicacion" value="<?php echo date("Y-m-d");   ?> "></input>
		<br/>
		Titulo Noticia: 
		<br/>
		<input type="text" name="tituloNoticia"></input>
		<br/>
		Texto Publicación:
		<br/> <input type="text" name="textoPublicacion"></input>
		<br/>
		Resumen Publicación: 
		<br/>
		<input type="text" name="resumenPublicacion"></input>
		<br/>
		<br/>
		Categoria: 
		<br/>
		<br/>
		<SELECT NAME="categoriaPublicacion">
		<option>Seleccione una Opción...</option>
		
		<?php 
			include("../../utils/conexionDB.php");
			
			$view_users_query="SELECT * from categoriasBlog ORDER BY nombreCategoria ASC"; 
        	$run=mysqli_query($dbcon,$view_users_query);  

        	while($row=mysqli_fetch_array($run)){

				echo'<OPTION VALUE="'.$row['idCategoria'].'">'.$row['nombreCategoria'].'</OPTION>';
			
			}
 
		?>

		</SELECT>


		<br/>
		<br/>
		<input type="submit" value="Guardar Entrada"></input>
	</form>

</body>
</html>