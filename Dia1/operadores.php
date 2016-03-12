<?php

/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División

-- */

$valor1 = 10;
$valor2 = 34;

$suma = $valor1 + $valor2;
$resta = $valor1 - $valor2;
$multi = $valor1 * $valor2;
$division = $valor1 / $valor2;

if($suma >= 0){
	echo 'Suma '.$suma;
	if($resta >=0){
		echo 'Resta '.$resta;
	} else{
		if($multi >=0){
			echo 'Muti '.$multi;
		}

	}
		

}

?>