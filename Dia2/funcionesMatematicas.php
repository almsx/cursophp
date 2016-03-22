<?php

function Calculadora($valor1,$valor2,$operacion){
	
	if($operacion == 'Suma'){
		echo $valor1+$valor2;
	} else if($operacion=='Resta'){
		echo $valor1-$valor2;
	} else if($operacion='Multiplica'){
		echo $valor1*$valor2;
	} else if($operacion='Division'){
		echo $valor/$valor2;
	}

};

$valor1 = 5;
$valor2 = 3;
$operacion = 'Resta';

Calculadora($valor1,$valor2,$operacion);


?>
