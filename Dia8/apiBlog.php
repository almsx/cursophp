<?php

include("../utils/conexionDB.php");

//$view_users_query="SELECT * from imagenes";
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


$arr = array();

$run=mysqli_query($dbcon,$view_users_query); 

while($row=mysqli_fetch_array($run)) {  
	$arr[] = $row;
}

echo '{"noticiasBlog":'.json_encode($arr).'}';
	            
?>  
