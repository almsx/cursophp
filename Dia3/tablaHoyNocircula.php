<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Vehiculos</title>
</head>
<body>
	<?php

	$vehiculos = array('XEX-982','FEM-2920','GAM-8292','REM-2830','LEL-388','PED-283','AAB-293','SEC-2934','FJF-344','ALM-395');
	
	?>

	<body>
    	<table border="1">
		<thead>
			<tr>
				<th>Vehiculo</th>
				<th>Día de la Semana</th>
				<th>Sábatino</th>
				
			</tr>
		</thead>
		<tbody>
		<?php

			function Semanal($valor){
				
				$variable = $valor;
				
				if($variable=='1' || $variable=='2'){
					return 'Jueves';
				}
				else 
				if($variable=='3' || $variable=='4'){
					return 'Viernes';
				}
				else 
				if($variable=='5' || $variable=='6'){
					return 'Lunes';
				}
				else 
				if($variable=='7' || $variable=='8'){
					return 'Martes';
				}
				else
				if($variable=='9' || $variable=='0'){
					return 'Miercoles';
				}
				
				

			}

			function Sabatino($valor){
				switch($valor){
					case '1':
						return 'Cuarto sabado del mes.';
					break;
					case '2':
						return 'Cuarto sabado del mes.';
					break;
					case '3':
						return 'Quinto sabado del mes.';
					break;
					case '4':
						return 'Quinto sabado del mes.';
					break;
					case '5':
						return 'Primer sabado del mes.';
					break;
					case '6':
						return 'Primer sabado del mes.';
					break;
					case '7':
						return 'Segundo sabado del mes.';
					break;
					case '8':
						return 'Segundo sabado del mes.';
					break;
					case '9':
						return 'Tercer sabado del mes.';
					break;
					case '0':
						return 'Tercer sabado del mes.';
					break;
				}
			}
			?>

			<?php
			foreach ($vehiculos as $coche) {
		?>
			<tr>
				<?php $variable = substr($coche,-1);?>
				
				<td><?php echo $coche ?></td>
				<td><?php echo Semanal($variable); ?></td>
				<td><?php echo Sabatino($variable); ?></td>
				
				<!--td><?php echo Semanal($coche); ?></td>
				<td><?php echo Sabatino($coche); ?></td-->
			</tr>
		<?php } ?>
		</tbody>
	</table>
	
</body>
</html>