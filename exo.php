<?php
// deviner les mots palyndrom

/* $mots = (string) readline(" donner un mot palyndron :");
if (preg_match('/[A-Z]/', $mots) === 1) {
    echo " ce mots contient un des majuscule ";
} else {
    $reverse = strrev($mots);
    if ($reverse === $mots) {
        echo " ce mots est un palyndrom\n";
    } else {
        echo " ce mots n'est pas paylyndrom\n";
    }

} */
//recherce  les mots d'insulte 

$insultes = ['con', 'merde', 'pute'];
foreach ($insultes as $insulte) {
    $changer[] = str_repeat('*', strlen($insulte));
}
$message = (string) readline("donner une phrase :");

$replace = str_replace($insultes, $changer, $message);
echo "$replace \n";









