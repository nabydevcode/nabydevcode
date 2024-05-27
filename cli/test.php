<?php
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'data/recipes.csv';


$ressource = fopen($fichier, 'r+');

$k = 0;
while ($line = fgets($ressource)) {
    $k++;
    if ($k == 1) {
        fwrite($ressource, 'salut les gens');
        break;
    }
}
fclose($ressource);



