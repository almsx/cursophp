<html>
<head>
<title>Calculadora</title>
<body>

<form action="sumadora.php" method="post">
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
