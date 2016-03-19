<?php 

$paises = array(
	'Mexico', 'España', 'Colombia', 'Peru', 
	'Argentina', 'Venezuela', 'Guatemala', 'Francia', 'Escocia', 'Brasil'
);

// foreach($paises as $pais){
// 	echo $pais . '<br />';

// 	if ($pais == 'Colombia') {
// 		break;
// 	}
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Paises Latinoamericanos</h1>
	<?php 

	foreach($paises as $pais){
		if ($pais == 'España') {
			continue;
		}
		
		echo $pais . '<br />';
	}


	?>
</body>
</html>