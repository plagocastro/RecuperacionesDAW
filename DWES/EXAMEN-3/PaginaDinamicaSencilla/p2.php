<?php
$ip = $_SERVER['REMOTE_ADDR'];
$host = $_SERVER['HTTP_HOST'];
$hora = date('Y-m-d H:i:s');
$metodo = $_SERVER['REQUEST_METHOD'];
$qs = $_SERVER['QUERY_STRING'];

echo 
<<<EXAMEN
<p>Esta petición viene de la dirección ip cliente $ip y trae en la cabecera Host el valor $host. La fecha y hora de la petición es <b> $hora </b>.</p>

<p>Está usando el método http $metodo , y la cadena de consulta es <b>$qs</b></p>
EXAMEN;

?>
