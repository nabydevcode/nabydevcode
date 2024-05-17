<?php


// revision sur l'exos dhier bonne chance  je suis en developper web 

// sur le creneaux

$creneaux = [];

$sortie = true;

while ($sortie !== false) {


    echo "Donner les creneaux d'auverture du magasin \n ";
    $debut = (int) readline("donner l'heure de debut :");
    $fin = (int) readline("donner l'heure de fin ");
    if ($debut >= $fin) {

        echo " L'heure de debut ($debut) ne doit etre supperieur ou egal a l'heure de fin ($fin) \n  ";
        continue;
    } else {
        $creneaux[] = [$debut, $fin];
        echo " vous vouler continuer a donner les crenaux \n";

        $action = '';
        while (true) {
            $action = (string) readline("taper (O/o) pour continuer sinon (N/n) pour quitter :");

            if (strtolower($action) === 'n') {
                $sotie = false;
                break;
            } else if (strtolower($action) === 'o') {
                break;
            } else {
                echo " le choix doit etre entre (o/O) et (n/N). Veillez ressayer \n";
            }
        }

        if ($action === 'n' || $action === 'N') {
            $sorie = false;
            break;
        } else if ($action === 'O' || $action === 'o') {
            continue;
        } else {
            echo " le choix doit etre entre (O/o) et (N/n)";
            continue;
        }
    }



}

echo " donner l'heure  d'ouverture du magasin \n";
$heure = (int) readline("Heure d'ouverture :");
$ok = false;

foreach ($creneaux as $value) {
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
foreach ($creneaux as $k => $value) {
    if ($k > 0) {
        echo "et de ";
    }
    echo "  {$value[0]} h  à {$value[1]} h ";
}




