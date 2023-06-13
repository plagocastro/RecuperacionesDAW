<?php
session_start();

if(isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
} else {
    $_SESSION['visitas'] = 1;
}

echo "Número de visitas: " . $_SESSION['visitas'] . "<br>";

echo '<form method="post"><button type="submit" name="cerrar">Cerrar sesión</button></form>';

if(isset($_POST['cerrar'])) {
    session_destroy();
    header("Location: p4.php");
    exit;
}
?>