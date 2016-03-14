<?php 

# Los arreglos multidimensionales nos permiten tener arreglos dentro de otros arreglos.

$amigos = array(
	array('Alejandro', 20),
	array('Cesar', 21),
	array('Manuel', 18)
);

# En este ejemplo accedemos primero al arreglo amigos y luego al primer elemento dentro de amigos, despues accedemos al primer valor del arreglo.

# Puedes llegar a tener cuantos niveles quieras.
echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';

?>