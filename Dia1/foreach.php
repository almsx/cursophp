<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);


$contactos = array('telefono' => 54743221, 'edad' => 20, 'pais' => 'mexico');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php
			
			# Con el ciclo foreach podemos recorrer arreglos de una manera muy facil.
			// foreach($meses as $mes){
			// 	echo '<li>' . $mes . '</li>';
			// }

			# El ciclo foreach tambien nos permite recorrer arreglos asosiativos.
			foreach($alejandro as $dato => $valores){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}

		?>
	</ul>
</body>
</html>