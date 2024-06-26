<?php

class Screneaux
{

    public function vues_incrementer()
    {
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
        $file_jounalier = $file . '-' . date('Y-m-d');
        incrementer($file);
        incrementer($file_jounalier);
    }
    public function incrementer(string $fichier)
    {
        $compteur = 1;
        if (file_exists($fichier)) {
            $compteur = (int) file_get_contents($fichier);
            $compteur++;
        }
        file_put_contents($fichier, $compteur);
    }
    public function reuperer_les_vues(): int
    {
        $nombre = 0;
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';

        if (!file_exists($file)) {
            echo " le fichier n'existe pas ";
        }
        $nombre = (int) file_get_contents($file);



        return $nombre;

    }
    public function vues_par_mois(int $annee, int $mois): int
    {
        $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
        $fichier = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
        $fichiers = glob($fichier);
        $total = 0;
        foreach ($fichiers as $data) {
            $total += (int) file_get_contents($data);
        }
        var_dump($total);
        return $total;
    }
    public function detait_vues_par_mois(int $annee, int $mois): array
    {
        $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
        $fichier = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
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