<?php

# Notas:
# - Los nombres de las variables son sensibles a mayusculas y minisculas
# - Los nombres de variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso la letra ñ

# Tipos de datos:
# String: Cadena de texto
# Integer: Numeros enteros
# Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

# Ejemplos de variables almacenando diferentes tipos de datos:

// String
$nombre = 'Alberto Tadeo';

// Entero 
$variable = 2;

// Boleano
$verdadero = true;

// Double
$numericoD = 3.5;

echo "<br/>".$variable;
echo "<br/>".$numericoD;

echo "<br/>El tipo $numericoD es ".gettype($numericoD);
echo "<br/> el dato verdadero es una variable ".gettype($verdadero);

// Comillas Sencillas vs Comillas Dobles
# En las comillas dobles podemos llamar variables, mientras que en las sencillas no.
# Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.



?>