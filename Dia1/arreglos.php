<?php

# Los arreglos son variables que permiten almacenar multiples valores.
# Ejemplo de un arreglo con los dias de la semana.

$semana = array('Lunes','Martes','Miercoles', 'Jueves', 'Viernes','Sabado','Domingo');

echo "Mi arreglo es un tipo de dato ".gettype($semana);
echo "<br/>";
#Imprimo solo un día de la semana
echo $semana[2];

?>