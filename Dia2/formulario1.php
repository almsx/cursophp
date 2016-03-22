<html>
<head>
<title>Mi primer formulario</title>
<body>

<form action="recibe2.php" method="post">
	<input type="text" placeholder="nombre" name="nombre">
	<br>
	
	<label for="hombre">Hombre</label>
	<input type="radio" name="sexo" value ="hombre" id="hombre">

	<label for="hombre">Mujer</label>
	<input type="radio" name="sexo" value ="mujer" id="mujer">

	<select name="year" id="year">
		<option value="1980">1980</option>
		<option value="1990">1990</option>
		<option value="2000">2000</option>
	</select>

	<label for="terminos">Aceptar los terminos</label>
	<input type="checkbox" name="terminos" id="terminos">

	<input type="submit" value="Enviar>">
</form>
</body>
</html>
