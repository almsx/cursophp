<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos a mi Blog</title>
</head>
<body>
	<h1>Bienvenidos al Blog del Curso de PHP</h1>
	<a href="admin.php">Ingresar al Admin de Blog</a>
	<br/>
	<br/>
	<h1>Noticias</h1>

	<?php

	 	include("../../utils/conexionDB.php");
        
        //$view_users_query="SELECT * from misAlumnos"; 
	 	$view_users_query = "
	 		SELECT 
    		noticiasBlog.idNoticia,
    		noticiasBlog.fechaPublicacion,
    		noticiasBlog.tituloPublicacion,
    		noticiasBlog.resumenPublicacion, 
    		noticiasBlog.publicacionCompleta, 
    		noticiasBlog.usuarioPublica,
    		noticiasBlog.categoriaPublica,
    		noticiasBlog.idNoticia,
    		categoriasBlog.idCategoria,
    		categoriasBlog.nombreCategoria,
    		usuariosBlog.idUsuario, 
    		usuariosBlog.nombres,
    		usuariosBlog.pais,
    		usuariosBlog.apPaterno,
    		usuariosBlog.apMaterno

			FROM noticiasBlog

			LEFT JOIN usuariosBlog ON noticiasBlog.usuarioPublica = usuariosBlog.idUsuario 
			LEFT JOIN categoriasBlog ON noticiasBlog.categoriaPublica = categoriasBlog.idCategoria

			ORDER BY noticiasBlog.fechaPublicacion DESC

			";
        
        	$run=mysqli_query($dbcon,$view_users_query);  
  
        	while($row=mysqli_fetch_array($run)) { 

        		$autor = $row[11] . ' ' . $row[13] . '  ' . $row[14]; 

        		?>

        		<h1><?php echo $row[2]; ?></h1>
        		<h3><?php echo "Publicado por ".$autor . " el Día " . $row[1]; ?></h3>
        		<br/>
        		<?php echo $row[4]; ?>
        		<br/>
        		<br/>
        		<?php echo "Escrito en su computadora desde ".$row[12] . " para la Redacción de: " . $row[9] . " <a href='comentarios.php'> Comentarios</a>"; ?> 

            	
            	<!--
            	//$nombre=$row[0];  
            	//$paterno=$row[1];  
            	//$materno=$row[2];  
            	//$ano=$row[3];
				//$mes=$row[4];
            	//$dia=$row[5];

            	-->
            
  
  
        	<?php } 


	?>
	
</body>
</html>