<?php

$edad = 18;
$sexo = 'M';
$origen = 'chihuaua';

/*
if($sexo != 'F' && $edad >=18  ){
	echo "entregar cartila militar";
	
} else{
	echo "no entregar cartilla porque es menor de edad o es mujer.";
}
*/

if($sexo =='M' XOR $edad == 18){
	echo "entrego Cartillas";
} else {
	echo "no entregar cartillas";
}

?>