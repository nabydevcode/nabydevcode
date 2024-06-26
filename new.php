<?php
require_once ('Screneaux.php');

$annee = (int) date('Y');
$annees = $annee - 1;
$moi = (int) date('m');
$mois = $moi - 1;
var_dump($mois, $moi);
$fantas = new Screneaux();
$fantas->reuperer_les_vues();
$fantas->vues_par_mois($annees, $moi);




