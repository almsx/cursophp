<?php

/*Administrador del Blog*/
session_start();

if (isset($_SESSION['usuarioBlogApp'])) {
            
	echo "Bienvenido al Administrador del Blog ".$_SESSION['usuarioBlogApp'];
	echo "<br/>";
	echo "<a href=cerrarSesion.php>Cerrar Sesión</a>";

	/*Campos de administración*/
?>
	<h1>Blog</h1>
	<ul>
		<li><a href="insertarEntrada.php">Nueva Publicación</a></li>
		<li><a href="listarEntradas.php">Listar Entradas</a></li>
	</ul>

	<h1>Usuarios</h1>
	<ul>
		<li><a href="perfil.php">Cambiar Datos de Usuario</a></li>
		<li><a href="listarUsuarios.php">Listar Usuarios Existentes Blog</a></li>
	</ul>

	<h1>Categorias del Blog</h1>
	<ul>
		<li><a href="nuevaCategoria.php">Nueva Categoria</a></li>
		<li><a href="listarCategorias.php">Listar Categorias</a></li>
	</ul>




   
<?        
} else {

	echo "Usuario no logueado, no puede ver Administrador.<br/>";
    echo "<a href=admin.php>  Iniciar Sesion</a>";

    }


?>