<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>



<body>

	<?php
		$vehiculos = array('0','1','2','3','4','5','6','7','8','9');

		/*
		foreach ($vehiculos as $coche) {
			# code...
			echo '<li>'.$coche.'</li>';
		}
		*/

	?>

	<table>
		<thead>
			<tr>
				<th>Vehiculo</th>
				<th>Día de la Semana</th>
				<th>Sábatino</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($vehiculos as $carro) {
				
			?>
			<tr>
				<td><?php echo $carro?></td>
				<td></td>
				<td></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
</body>
</html>