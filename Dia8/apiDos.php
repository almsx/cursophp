<?php

define('DB_SERVER','localhost');
define('DB_NAME','Clase6');
define('DB_USER','root');
define('DB_PASS','');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);

$arr = array();

$rs = mysql_query("SELECT 
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

            ORDER BY noticiasBlog.fechaPublicacion DESC");

while($obj = mysql_fetch_object($rs)) {
$arr[] = $obj;
}
echo json_encode($arr);

?>