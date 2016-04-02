<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hoy no Circula</title>
</head>
<body>

	<form action="placas.php" method="post">
		<label id="">Selecciona la terminación de tu placa</label>
		<select name="tipoPlaca" id="tipoPlaca">
			<option value="1-2">1-2</option>
			<option value="3-4">3-4</option>
			<option value="5-6">5-6</option>
			<option value="7-8">7-8</option>
			<option value="9-0">9-0</option>			
		</select>
		<label>Selecciona tipo de Vehiculo</label>
		<select name="tipoVehiculo" id="tipoVehiculo">
			<option value="Uber">Uber</option>
			<option value="moto">Moto</option>
			<option value="electrico">Electrico</option>
			<option value="publico">Transporte Público</option>			
		</select>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>