//Crea un API que me devuelva el IMC de una persona (muy bien explicado aquí ). Endpoint /apis/imc/. Formato texto plano (tendrás que resolver cómo enviar los parámetros, hay diferentes opciones). Ideal en el url.
<?php
$peso = $_GET['peso'];
$altura = $_GET['altura'];

$imc = $peso / ($altura * $altura);

header('Content-Type: text/plain');

echo "Tu IMC es: " . $imc;
    if (!$peso || !$altura) {
        http_response_code(400);
        echo 'Parámetros incorrectos';
        exit;
    }

    $peso = floatval($peso);
    $altura = floatval($altura);
    if ($peso <= 0 || $altura <= 0) {
        http_response_code(400);
        echo 'Parámetros incorrectos';
        exit;
    }

    $imc = $peso / ($altura * $altura);
    header('Content-Type: text/plain');
    echo $imc;

} else {
    http_response_code(405);
    header('Allow: GET');
    echo 'Método no permitido';
}
?>
