<html>
<head>
<title>Calculadora</title>
<body>

<?php

if($_POST){
	//echo 'La operacion va a ser '.$_POST['year'];
	$operacion = $_POST['year'];
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$resultado = $valor1+$valor2;
	
	if($operacion == 'suma'){
		echo "la suma es ".$resultado;
	} else{
		echo "falta programar estas funciones";
	}

}


?>


<form action="" method="post">
	<Label for="label1">Valor 1:</label><br/>
	<input type="text" placeholder="Valor 1" name="valor1">
	<br>
	<Label for="label2">Valor 2:</label><br/>
	<input type="text" placeholder="Valor 2" name="valor2">
	<br>
	<br>
	<Label for="label3">Operación</label><br/>	
	
	<select name="year" id="year">
		<option value="suma">Suma</option>
		<option value="resta">Resta</option>
		<option value="multi">Multuplicacion</option>
		<option value="division">División</option>
	</select>

	
	<input type="submit" value="Enviar">

</form>
</body>
</html>
