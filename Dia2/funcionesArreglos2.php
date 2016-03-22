<?php 

$semana = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

//sort($semana);

echo $primer_dia = array_shift($semana).'<br/>';
echo $ultimo_dia = array_pop($semana).'<br/>';;


echo join(' * , -- ', $semana).'<br/>';

echo count($semana).'<br/>';

//sort($semana);
echo join('(,) ', $semana).'<br/>';

//$semana_reverse = array_reverse($semana);
//echo join(' - ', $semana_reverse);

?>