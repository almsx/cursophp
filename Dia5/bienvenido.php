<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: formulario.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>

    
</head>

<body>
<h1>bienvenido </h1><br>
<?php
echo $_SESSION['email'];
?>


<h1><a href="logout.php">Cerrar Sesión</a> </h1>


</body>

</html>

