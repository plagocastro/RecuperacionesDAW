<?php

$url = 'https://api.chucknorris.io/jokes/random';

$api = file_get_contents($url);

$chiste = json_decode($api);

echo '<p><i>' . $chiste->value . '</i></p>';
echo '<br>';
echo '<p><b>Actualizado: </b>' . $chiste->updated_at . '</p>';
if (!empty($chiste->categories)) {
    echo '<p><b>Categoría: </b>' . implode(', ', $chiste->categories) . '</p>';
} else {
    echo '<p><b>Categoría:</b> No posee </p>';
}

echo '<br>';

$url = 'https://api.chucknorris.io/jokes/categories';
$categories = json_decode(file_get_contents($url));


echo '<ul>';
foreach ($categories as $category) {
    echo '<li><a href="chiste_categoria.php?category=' . urlencode($category) . '">' . $category . '</a></li>';
}
echo '</ul>';

echo '<br>';

$buscar = 'spain';

$url = 'https://api.chucknorris.io/jokes/search?query=' . urlencode($buscar);
$api = file_get_contents($url);
$json_filtrado = json_decode($api);
$chiste = $json_filtrado->result[array_rand($json_filtrado->result)];

echo '<p><i>' . $chiste->value . '</i></p>';
echo '<br>';
echo '<p><b>Actualizado: </b>' . $chiste->updated_at . '</p>';
if (!empty($chiste->categories)) {
    echo '<p><b>Categoría: </b>' . implode(', ', $chiste->categories) . '</p>';
} else {
    echo '<p><b>Categoría:</b> No posee </p>';
}


?>