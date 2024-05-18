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

$insultes = ['con', 'merde'];
$message = (string) readline("donner une phrase :");
$contientInsulte = false;

foreach ($insultes as $insulte) {
    if (strpos($message, $insulte) !== false) {
        $contientInsulte = true;
        break;
    }
}
if ($contientInsulte) {
    echo " cette phrase contient une insulte ";
} else {
    echo " ce mots ne contient pas des insulte (: \n";
}








