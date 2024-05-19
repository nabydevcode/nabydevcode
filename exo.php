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
    $changer[] = strtoupper($insulte[0]) . str_repeat('*', strlen($insulte) - 1);
}
$message = (string) readline("donner une phrase :");
$replace = str_replace($insultes, $changer, $message, );

echo $replace;

$ok = false;
foreach ($insultes as $value) {
    if (strpos($message, $value) !== false) {
        $ok = true;
        break;
    }
}

if ($ok) {
    echo " [desole votre message contient des gros mots] ";

} else {
    echo "$replace \n";
}










