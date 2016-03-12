<?php

$edad = 13;
$sexo = 'F';
$origen = 'chihuaua';

if($edad >=18 && $sexo == 'M' | $origen == 'CDMX'){
	echo "entregar cartila militar";
	
} else{
	echo "no entregar cartilla porque es menor de edad o es mujer.";
}

?>