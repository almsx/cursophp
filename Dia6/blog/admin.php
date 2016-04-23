<?php

/*Login para ingresar al administrador del Blog*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Blog</title>
</head>
<body>
	<form action="validar.php" method="POST">
		<input type="text" name="userBlog" placeHolder="Usuario"></input>
		<br/>
		<input type="password" name="passBlog" placeHolder="Contraseña"></input>
		<br/>
		<input type="submit" value="Ingresar al Blog"></input>
	</form>
</body>
</html>