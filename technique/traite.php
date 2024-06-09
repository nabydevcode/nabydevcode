<?php
$parfums = [
    'frais' => 3,
    'chocolat' => 5
    ,
    'vanile' => 6
];
$cornets = [
    'pot' => 2,
    'cornet' => 3,
];
$supplements = [
    'pepite de chocolate' => 1,
    'chantilly' => 0.5
];


// generer une formulaire checbox
if (!function_exists('checkbox')) {
    function checkbox(string $name, string $value, array $data): string
    {
        $attributes = '';
        if (isset($data[$name]) && (in_array($value, $data[$name]))) {
            $attributes .= 'checked';
        }
        return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
   HTML;

    }
}

//generer un formulaire raddio 

if (!function_exists('radio')) {
    function radio(string $name, string $value, array $data): string
    {
        $attributes = '';
        if (isset($data[$name]) && $data[$name] === $value) {
            $attributes .= 'checked';
        }
        return <<<HTML
        <input type="radio" name="$name" value="$value" $attributes>
       HTML;
    }
}


//generer un formulaire select
if (!function_exists('selecte')) {
    function selecte(string $name, $value, array $options)
    {
        $html = [];
        $k = 0;
        foreach ($options as $key => $option) {
            $attributes = $key == $value ? 'selected' : '';
            $k = $key + 1;
            $html[] = " <option  value='$k' $attributes> $option </option>";
        }
        return "<select class='form-control' name='$name'>" . implode($html);


    }
}


// Renseigner sur les heures d'ouvertures
if (!function_exists('ouverture')) {
    function ouverture(array $cren, $heure): bool
    {
        foreach ($cren as $value) {
            if (!empty($value)) {
                $debut = $value[0];
                $fin = $value[1];
                if ($heure >= $debut && $heure < $fin) {
                    return true;
                }
            }

        }
        return false;

    }
}

// generer les hauraires d'ouvertures
if (!function_exists('genererhoraire')) {
    function genererhoraire(array $creneaux)
    {
        if (count($creneaux) === 0) {
            return 'fermé';
        }
        $phrase = [];
        foreach ($creneaux as $value) {
            $phrase[] = " de  <strong>{$value[0]}h  </strong>à   <strong>{$value[1]}h   </strong>";
        }
        return 'Ouvert' . implode(' et ', $phrase);
    }

}


// 
if (!function_exists('genererselete')) {
    function genererselete(array $creneaux)
    {
        if (count($creneaux) === 0) {
            return '1';
        }
        $phrase = [];
        foreach ($creneaux as $value) {
            $phrase[] = " {$value[0]} {$value[1]}";
        }
        return implode(' et ', $phrase);
    }
}

if (!function_exists('read_csv')) {
    function read_csv($file_path)
    {
        $data = [];
        if (($handle = fopen($file_path, 'r')) !== false) {
            while (($row = fgetcsv($handle)) !== false) {
                $data[] = $row;
            }
            fclose($handle);
        }
        return $data;
    }

}
if (!function_exists('vues_incrementer')) {
    function vues_incrementer()
    {
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
        $file_jounalier = $file . '-' . date('Y-m-d');
        incrementer($file);
        incrementer($file_jounalier);
    }

}
if (!function_exists('incrementer')) {

    function incrementer(string $fichier)
    {
        $compteur = 1;
        if (file_exists($fichier)) {
            $compteur = (int) file_get_contents($fichier);
            $compteur++;
        }
        file_put_contents($fichier, $compteur);
    }
}
if (!function_exists('reuperer_les_vues')) {

    function reuperer_les_vues(): int
    {
        $nombre = 0;
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
        if (!file_exists($file)) {
            echo " le fichier n'existe pas ";
        }
        $nombre = (int) file_get_contents($file);
        return $nombre;

    }
}
if (!function_exists('vues_par_mois')) {
    function vues_par_mois(int $annee, int $mois): int
    {
        $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
        $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
        $fichiers = glob($fichier);
        $total = 0;
        foreach ($fichiers as $data) {
            $total += (int) file_get_contents($data);
        }
        return $total;

    }

}
if (!function_exists('detait_vues_par_mois')) {
    function detait_vues_par_mois(int $annee, int $mois): array
    {
        $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
        $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
        $fichiers = glob($fichier);
        $visites = [];
        foreach ($fichiers as $data) {
            $parties = explode('-', basename($data));
            $visites[] = [
                'annee' => $parties[1],
                '$mois' => $parties[2],
                'jour' => $parties[3],
                'total' => file_get_contents($data)
            ];
        }
        return $visites;
    }
}










