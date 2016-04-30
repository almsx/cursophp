<?php

/*Modo Debug en PHP*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*Revision de errores en Query*/

http://stackoverflow.com/questions/15439919/mysqli-fetch-array-expects-parameter-1-to-be-mysqli-result-boolean-given-in

if (!$check1_res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}