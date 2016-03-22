<?php 

$texto = 'Hola México';

echo htmlspecialchars($texto).'<br/>';
//echo trim($texto).'<br/>';
echo strlen($texto).'<br/>';
echo substr($texto, 0, 4).'<br/>';

echo strtoupper($texto).'<br/>';
echo strtolower($texto).'<br/>';

echo strpos($texto, 'E').'<br/>';

?>