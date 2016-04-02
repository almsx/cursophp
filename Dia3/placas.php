<?php
$valorPlaca = $_POST['tipoPlaca'];
$tipoVehiculo = $_POST['tipoVehiculo'];

function HoyNoCircula($valorPlaca,$tipoVehiculo){

	if($tipoVehiculo!='electrico'){

		if($valorPlaca=='1-2'){
			echo 'Tu vehiculo '.$tipoVehiculo.' No Circulas día Jueves y el cuarto sabado del mes.';
		}
		if($valorPlaca=='3-4'){
			echo 'Tu vehiculo '.$tipoVehiculo.' No Circulas día Miércoles y el tercer sabado del mes.';
		}
		if($valorPlaca=='5-6'){
			echo 'Tu vehiculo '.$tipoVehiculo.' No Circulas día Lunes y el primer sabado del mes.';
		}
		if($valorPlaca=='7-8'){
			echo 'Tu vehiculo '.$tipoVehiculo.' No Circulas día Martes y el segundo sabado del mes.';
		}
		if($valorPlaca=='9-0'){
			echo 'Tu vehiculo '.$tipoVehiculo.' No Circulas día viernes y de vez en cuando el 5to sabado.';
		}

	} else {
		echo "Felicidades, tu coche ".$tipoVehiculo ." si circula no importa el día, aunque tiene placa temrinación ".$valorPlaca;

	}

};

HoyNoCircula($valorPlaca,$tipoVehiculo);

/*
switch($valorPlaca){
	case '1-2':
		echo 'No Circulas día Jueves y el cuarto sabado del mes.';
	break;
	case '3-4':
		echo 'No Circulas día Miércoles y el tercer sabado del mes.';
	break;
	case '5-6':
		echo 'No Circulas día Lunes y el primer sabado del mes.';
	break;
	case '7-8':
		echo 'No Circulas día Martes y el segundo sabado del mes.';
	break;
	case '9-0':
		echo 'No Circulas día viernes y de vez en cuando el 5to sabado.';
	break;
}
*/
?>