<?php
	
	$valorPlaca = $_POST['placa'];
	$tipoVehiculo = $_POST['tipoVehiculo'];
	//$placaTermino = substr($valorPlaca, -1);
	$placaCaracteres = intval(preg_replace('/[^0-9]+/', '', $valorPlaca), 10);
	$placaTermino = substr($placaCaracteres, -1);
 

	function circulaDiario($tipoVehiculo){

		if($tipoVehiculo=='Electrico'){
			echo "SI";
		} else {
			echo "NO";
		}

	};

	function semanal($placaTermino, $tipoVehiculo){

		if($tipoVehiculo != 'Electrico'){


			if($placaTermino == 5 || $placaTermino == 6){
				echo "Lunes";
			}

			if($placaTermino == 7 || $placaTermino == 8){
				echo "Martes";
			}

			if($placaTermino == 3 || $placaTermino == 4){
				echo "Miércoles";
			}

			if($placaTermino == 9 || $placaTermino == 0){
				echo "Jueves";
			}

			if($placaTermino == 1 || $placaTermino == 2){
				echo "Viernes";
			}

		} else {
			echo " - ";
		}


	};

	function sabatino($placaTermino, $tipoVehiculo){

		if($tipoVehiculo != 'Electrico') {

			if($placaTermino == 5 || $placaTermino == 6){
				echo "2do Sábado";
			}

			if($placaTermino == 7 || $placaTermino == 8){
				echo "2do Sábado";
			}

			if($placaTermino == 3 || $placaTermino == 4){
				echo "3er Sábado";
			}

			if($placaTermino == 9 || $placaTermino == 0){
				echo "4to Sábado";
			}

			if($placaTermino == 1 || $placaTermino == 2){
				echo "5to Sábado";
			}

		} else {
			echo " - ";
		}

	};

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<body>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Placa</th>
				<th>Tipo de Vehiculo</th>
				<th>Circula Diario</th>
				<th>Día de la Semana</th>
				<th>Sábatino</th>
			</tr>
		</thead>
		<tbody>
			<td><?php echo $valorPlaca ?></td>
			<td><?php echo $tipoVehiculo ?></td>
			<td><?php circulaDiario($tipoVehiculo); ?></td>
			<td><?php semanal($placaTermino,$tipoVehiculo); ?></td>
			<td><?php sabatino($placaTermino,$tipoVehiculo); ?></td>
		</tbody>
	</table>
					


	
</body>
</html>