<?php

$edad = 19;
$sexo = 'M';

if($edad >=18){
	if($sexo =='M'){
		echo "entregar cartila militar";
	} else{
		echo "No entregar cartilla por que es mujer";
	}
} else{
	echo "no entregar cartilla porque es menor de eddad";
}

?>