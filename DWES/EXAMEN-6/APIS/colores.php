<?php

$colores = array('rojo', 'azul', 'verde', 'amarillo', 'naranja');

$color_aleatorio = $colores[array_rand($colores)];

header('Content-Type: text/plain');

echo $color_aleatorio;

?>