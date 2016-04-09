<?php

function CalculaMiRFC($nombre,$appaterno,$apmaterno,$anoNac,$mesNac,$diaNac){

	$rfc = "";

	$nomMay = strtoupper($nombre);
	$patMay = strtoupper($appaterno);
	$matMay = strtoupper($apmaterno);

	/*Extraemos los datos para generar el RFC*/

	/*Primera Letra del Apellido Paterno*/
	
	$rfc = substr($patMay,0, 2);

	/*
	function EsVocal($letra) { 
		if ($letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U' || $letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') 
		return 1; 
		else 
		return 0; 
	} 


	$len_apellidoPaterno=strlen($patMay); 
		for($x = 1; $x < $len_apellidoPaterno; $x++) { 
			$c = substr($patMay,$x,1); 
			if (EsVocal($c)) { 
				$rfc .= $c;
				break; 
			}
		}
	*/

	/*Obtenemos la primera letra del Apellido Materno*/
	$rfc .= substr($matMay,0, 1);

	/*Obtenemos la primera letra del Nombre*/
	$rfc .= substr($nomMay, 0,1);

	/*Obtenemos el valor numerico del año*/

	$tamAno = strlen($anoNac);
	if($tamAno == 4){
		$rfc .= substr($anoNac, 2,3);
	} else {
		$rfc .=$anoNac;
	}

	/*Obtenemos el valor numerico del mes*/

	$tamMes = strlen($mesNac);
	if($tamMes == 2){
		$rfc .=$mesNac;
	} else {
		$rfc .= '0'.$mesNac;
		
	}

	/*Obtenemos el valor numerico del dia*/

	$tamDia = strlen($diaNac);
	if($tamDia == 2){
		$rfc .= $diaNac;
	} else {
		$rfc .= '0'.$diaNac;
		
	}




	return $rfc; 

};

?>