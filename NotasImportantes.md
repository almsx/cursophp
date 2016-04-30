# PHP

## Instalación de XAMPP

Para ejecutar los ejemplos que se encuentran en este
curso es importante tener un entorno XAMP

<li>X -> L(Linux), M(MacOSX), W(Windows)</li>
<li>apache</li>
<li>mysql</li>
<li>php5</li>

## Ejecutar mi primer PHP

>
~~~
<?php
echo "hola mundo desde PHP!";
?>
~~~

## Notas del Curso

En cada uno de los ficheros que se encuentran en este
curso vienen notas de acuerdo a la función programada

## Configuración cambiar contraseña en XAMPP / MAMP de root

Liga - https://teamtreehouse.com/community/mamp-phpmyadmin-error-1045-after-i-changed-my-root-password-not-sure-how-to-change-it-backreset

## Ligas importantes

Zend Certification - http://www.zend.com/en/services/certification

## Para insertar información en el maquetado de nuestros sitios.

Lorem impsum - http://es.lipsum.com/feed/html


## ModoDebug en PHP

>
~~~
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
~~~

## Revision de errores en Query


Stack OverFlow - 
http://stackoverflow.com/questions/15439919/mysqli-fetch-array-expects-parameter-1-to-be-mysqli-result-boolean-given-in

>
~~~
<?php
if (!$check1_res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

?>
~~~
Donde....
 
 * la variable $check1_res es la que tiene
la query que hicimos para hcer nuestra consulta.
 * la variable $con es donde tenemos asignada
la base de datos (Conexión).


