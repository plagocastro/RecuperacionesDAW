<?php

$numeros = count($_SERVER);
echo "<h1>Numero de Variables de \$_SERVER: $num_variables</h1>";
echo "<ul>";

foreach ($_SERVER as $variable => $valor) {
    echo "<li>$variable: $valor</li>";
}

echo "</ul>";

?>