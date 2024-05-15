<?php

$eleves = [
    [
        'nom' => 'toure',
        'prenoms' => 'naby zakaria',
        'notes' => [16, 16, 20],
    ],
    [
        'nom' => 'conde',
        'prenoms' => 'mohamed lamine',
        'notes' => [18, 17, 20],
    ],
];

//echo "Bonjour " . ' ' . $eleves[1]['nom'] . ' ' . $eleves[1]['prenoms'] . ' ' . 'vous aviez eu ' . ' ' . (($eleves[1]['notes'][0] + $eleves[1]['notes'][1] + $eleves[1]['notes'][2]) / 3) . ' ' . 'de moyenne';

// les creneaux d'ouverture 

$heure = (int) readline('donner vore darriver : ');
if (!((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17))) {
    echo " la pharmacie est fermé ";
} else {

    echo " la pharmacie est ouverte";
}
/* $matiere = (string) readline('quelle matiere :');
$notes1 = (int) readline('note1: ');
$notes2 = (int) readline('note2: ');

$moyenne = (int) (($notes1 + $notes2)) / 2;

if ($moyenne >= 10) {
    echo " informations \n";
    echo "Matiere: $matiere \n";
    echo "Notes1: $notes1 \n";
    echo "Notes2: $notes2 \n";
    echo "Moyenne: $moyenne \n";
    echo "vous avez la moyenne ";
} elseif ($moyenne < 10) {
    echo " informations";
    echo "Matiere: $matiere \n";
    echo "Notes1: $notes1 \n";
    echo "Notes2: $notes2 \n";
    echo "Moyenne: $moyenne \n";
    echo " vous n'aviez pas la moyenne : $moyenne  ";
} elseif ($moyenne == 0) {
    echo "la valeur inconnu";
} */