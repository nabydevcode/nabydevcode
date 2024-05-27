<?php
$title = "menu_restaurant";
require ('header.php');

$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'recipes.tsv';
$resource = file($fichier);

foreach ($resource as $key => $value) {
    $resource[$key] = explode("\t", trim($value));
}




?>

<h1> Menu d'aujourdhui</h1>
<?= var_dump($resource) ?>
<?php
require ('footer.php');
?>