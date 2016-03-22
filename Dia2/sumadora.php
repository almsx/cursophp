<?php

$operacion = $_POST['year'];
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

function Suma($valor1,$valor2){
	$operacion = $valor1+$valor2;

	echo 'El resultado de la suma en funciones es '.$operacion;
}

switch($operacion){
	case 'suma':
		//$resultado = $valor1+$valor2;
		//echo 'El resultado de la suma es '.$resultado;
		Suma($valor1,$valor2);
	break;

	case 'resta':
		$resultado = $valor1-$valor2;
		echo 'El resultado de la resta es '.$resultado;
	break;

	case 'multi':
		$resultado = $valor1*$valor2;
		echo 'El resultado de la multiplicación es '.$resultado;
	break;

	case 'division':
		$resultado = $valor1/$valor2;
		echo 'El resultado de la división es '.$resultado;
	break;
}

?>