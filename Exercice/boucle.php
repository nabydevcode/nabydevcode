<?php

/* $notes = [];

$note = 0;

while ($note !== 'fin') {

    $note = readline('donner vos notes  ou taper fin pour quitter:');
    if ($note !== 'fin') {
        $notes[] = (int) $note;
    }
}
echo " voila les notes que vous aviez eu a taper \n";
foreach ($notes as $key => $value) {
    echo " - note" . $key + 1 . ":" . $value . "\n";
} */


//les creneaux
/* 
$heuresOverture = [];

$sortie = true;

while ($sortie !== false) {

    if ($sortie !== false) {

        echo " Donner vos horaires d'ouverture de magasin \n";
        $heuredbute = readline('heure de debut :');
        $heuredfin = readline('heure de fin :');

        if ($heuredbute > $heuredfin) {
            echo " votre heure debut est supperieur \n";
            $heuredbute = readline('heure de debut :');
            $heuredfin = readline('heure de fin :');
        } else {
            $heuresOverture[] = (int) $heuredbute;
            $heuresOverture[] = (int) $heuredfin;
        }

        echo " vous vouler connaitre heure douverture ou taper fin ou sortie\n";
        $heureOverture = readline('taper heure douverture :');

        if ($heureOverture >= $heuresOverture[0] && $heureOverture <= $heuresOverture[1]) {

            echo " le magasin sera ouvert \n";
        } else {
            echo " le magasin sera fermer \n";
        }

        $essay = readline("taper O pour continuer ou fin pour quitter :");
        if ($essay === 'O') {
            $heuresOverture[] = 0;
            $sortie = true;
        } elseif ($essay === 'fin') {
            $sortie = false;
            break;
        }
    } else {

        break;
    }






} */

$creneaux = [];

$sortie = true;

while ($sortie) {
    echo " donner les heures de creneaux \n";
    $debut = (int) readline('heure de debut :');
    $fin = (int) readline('heure de fin:');
    if ($debut >= $fin) {

        echo " heure de  debut  ne doit pas etre $debut >= à heure $fin de fin , resayer a nouveau \n";
        continue;
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline(" nouveau crenaux?  ou taper (n) pour quitter  ");
        if ($action === 'n') {
            break;
        } else {
            continue;
        }
    }

}
$heureDouverture = false;

$ouverture = (int) readline("donner l'heure d'ouverture :");

foreach ($creneaux as $value) {
    if ($ouverture >= $value[0] && $ouverture <= $value[1]) {
        $heureDouverture = true;
        break;
    }
}

if ($heureDouverture) {
    echo " le magasin sera ouvert \n";
} else {
    echo " le magasin sera fermé \n";
}


echo "le magasin  sera ouvert de";
foreach ($creneaux as $k => $value) {
    if ($k > 0) {
        echo "et de";
    }
    echo " {$value[0]} h à {$value[1]} h ";

}
// deuxieme partie 
/* $heuresOverture = [];
$sortie = true;

while ($sortie) {
    echo "Donner vos horaires d'ouverture de magasin \n";
    $heureDebut = readline('Heure de début : ');
    $heureFin = readline('Heure de fin : ');

    // Vérification que l'heure de début soit inférieure à l'heure de fin
    if ($heureDebut >= $heureFin) {
        echo "Votre heure de début est supérieure ou égale à l'heure de fin. Veuillez réessayer.\n";
        continue;  // Recommencez la boucle pour demander les heures de nouveau
    } else {
        $heuresOverture[] = (int) $heureDebut;
        $heuresOverture[] = (int) $heureFin;
    }

    echo "Vous voulez connaître l'heure d'ouverture ou taper 'fin' pour sortir\n";
    $heureOverture = readline('Taper l\'heure d\'ouverture : ');

    // Vérification que l'heure d'ouverture est dans la plage des heures d'ouverture
    if (is_numeric($heureOverture)) {
        $heureOverture = (int) $heureOverture;
        if ($heureOverture >= $heuresOverture[0] && $heureOverture <= $heuresOverture[1]) {
            echo "Le magasin sera ouvert\n";
        } else {
            echo "Le magasin sera fermé\n";
        }
    } else {
        if ($heureOverture === 'fin') {
            $sortie = false;
            break;
        } else {
            echo "Entrée invalide. Veuillez entrer une heure valide ou 'fin' pour sortir.\n";
        }
    }
    $essay = readline("Taper 'O' pour continuer ou 'fin' pour quitter : ");
    if ($essay === 'O') {
        continue;
    } elseif ($essay === 'fin') {
        $sortie = false;
    } else {
        echo "Entrée invalide. Sortie par défaut.\n";
        $sortie = false;
    }
}
 */