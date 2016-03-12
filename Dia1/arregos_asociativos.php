<?php 

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# En los arreglos podemos guardar cualquier tipo de dato, incluso podemos guardar un arreglo dentro de otro.
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro arreglo llamado semana.
/*
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';

echo $arreglo[0];
echo "<br/>";
echo $arreglo[3];
*/

$agenda = array('Nombre' => 'Alberto Luebbert', 'Telefono' => '31321143','Direccion'=>'Avenida Siempre Viva', 'Correo'=> 'alberto@ideashappy.com');

echo $agenda['Telefono'];

?>
