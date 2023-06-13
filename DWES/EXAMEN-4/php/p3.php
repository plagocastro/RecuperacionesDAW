<?php

if(isset($_COOKIE["color"])) {
    $color = $_COOKIE["color"];
    
    echo '<p style="color:' . $color . '"> Tu color es: ' . $color . '.</p>';
    echo '<form method="post"><button type="submit" name="reset">Borrar selección</button></form>';

} else {
    echo '<form method="post">';
    echo '<label for="color">Selecciona color:</label><br>';
    echo '<input type="radio" name="color" value="green">Verde<br>';
    echo '<input type="radio" name="color" value="blue">Azul<br>';
    echo '<button type="submit" name="submit">Guardar</button>';
    echo '</form>';
}

if(isset($_POST["submit"])) {
    
    $color = $_POST["color"];
    setcookie("color", $color, time() + (86400 * 30), "/");
    
    echo '<p style="color:' . $color . '"> Tu color es: ' . $color . '.</p>';
    
    echo '<form method="post"><button type="submit" name="reset">Borrar selección</button></form>';
}

if(isset($_POST["reset"])) {
    
    setcookie("color", "", time() - 3600, "/");
    
    header("Location: p3.php");
    exit;
}
?>