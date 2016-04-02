<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hoy No Circula</title>
</head>
<body>

	<form action="validaCircula.php" method="post">
		<label>Ingresa tu Placa</label>
		<input type="text" placeholder="Ingresa tu Placa" name="placa">
		<label>Selecciona tipo de Vehiculo</label>
		<select name="tipoVehiculo" id="tipoVehiculo">
			<option value="Uber">Uber</option>
			<option value="Moto">Moto</option>
			<option value="Electrico">Electrico</option>
			<option value="Publico">Transporte Público</option>			
		</select>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>