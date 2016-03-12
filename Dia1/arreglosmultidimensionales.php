<?php


//$contactos = array('Nombre' => 'Alberto Luebbert', 'Telefono' => '31321143','Direccion'=>'Avenida Siempre Viva', 'Correo'=> 'alberto@ideashappy.com');

$contactos = array('Nombre' => 'Alberto Luebbert', 'Telefono' => '31321143','Direccion'=>'Avenida Siempre Viva', 'Correo'=> 'alberto@ideashappy.com');


foreach ($contactos as $dato => $valor) {
	
	echo '<li>' . $dato . ' : ' .$valor . '</li>';

}



?>