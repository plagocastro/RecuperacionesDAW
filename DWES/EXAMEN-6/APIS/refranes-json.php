//Crear un API similar al anterior, pero que devuelva tres refranes en un objeto JSON, con un campo extra que diga el orden: primero, seguro y tercero. Endpoint /api/refranes-json . Formato JSON
<?php
$refranes = array(
    "A buen entendedor pocas palabras bastan",
    "A caballo regalado no le mires el dentado",
    "A falta de pan, buenas son tortas",
    "A quien madruga, Dios le ayuda",
    "Cada loco con su tema",
    "De tal palo, tal astilla",
    "Dime con quién andas y te diré quién eres",
    "El que ríe último, ríe mejor",
    "Más vale prevenir que curar"
);


$refran_1 = $refranes[array_rand($refranes)];
$refran_2 = $refranes[array_rand($refranes)];
$refran_3 = $refranes[array_rand($refranes)];

header('Content-Type: application/json');

$refranes_json = array(
    array('orden' => 'primero', 'refran' => $refran_1),
    array('orden' => 'segundo', 'refran' => $refran_2),
    array('orden' => 'tercero', 'refran' => $refran_3)
);

echo json_encode($refranes_json);
?>