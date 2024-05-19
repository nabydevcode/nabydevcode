<?php


// revision sur l'exos dhier bonne chance  je suis en developper web 


//pour continuer ou pas 
function demander_oui_non()
{
    while (true) {
        $reponse = (string) readline("taper o (o/O) pour quitter ou n(n/N pour quitter :)");

        if (strtolower($reponse) === 'o') {
            return true;
        } else if ((strtolower($reponse) === 'n')) {

            return false;
        }
    }

}
// demander les srenneaux d'ouverture 
function demanderCreneaux($message = "donner les heuere d'ouvertures")
{
    echo $message . "\n";

    while (true) {
        $debut = (int) readline("donner l'heure de debut :");
        if ($debut >= 0 && $debut <= 24) {
            break;
        }
    }
    while (true) {
        $fin = (int) readline("donner l'heure de fin :");
        if ($fin >= 0 && $fin <= 23 && $fin > $debut) {

            break;
        }
    }
    return [$debut, $fin];
}






function demanderScreneaux()
{
    $creneaux = [];
    $continuer = true;
    while ($continuer) {

        $creneaux[] = demanderCreneaux();
        $continuer = demander_oui_non();
    }

    return $creneaux;
}


// main du programme 

$horaire = demanderScreneaux();


$heure = (int) readline("donner d'ouverture :");
foreach ($horaire as $value) {
    if ($heure >= $value[0] && $heure <= $value[1]) {
        $ok = true;
        break;
    }
}

if ($ok) {
    echo "le magasin sera  ouvert \n";
} else {
    echo " le magasin sera fermé \n";
}

echo "******************************* \n";
echo " le magasin sera ouvert de  ";
foreach ($horaire as $k => $value) {
    if ($k > 0) {
        echo "et de ";
    }
    echo "  {$value[0]} h  à {$value[1]} h ";
}




