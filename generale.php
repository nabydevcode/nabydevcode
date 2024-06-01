<?php

$title = "generale";
require ('technique/traite.php');
require ('header.php');
$nombre = reuperer_les_vues();
$annee_selction = (int) $_GET['annee'];


$year = (int) date('y');
$annee = (int) ('20' . $year);



?>

<h1> Deshabord de mon site</h1>
<div class="row">
    <div class="col-md-4">

        <div class="card">
            <div class="list-group ">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <a class="list-group-item <?= $annee === $annee_selction ? 'active' : '' ?>"
                        href="generale.php?annee=<?= $annee - $i ?>" <?= $annee - $i ?>> </a>
                <?php endfor ?>
            </div>
        </div>

    </div>
    <div class=" col-md-8">
        <div class="card">
            <div class="card-body">

                <strong style="font-size: 3rem;">
                    <?= $nombre ?>
                </strong> <br>
                Visite
                <?= $nombre > 1 ? 's' : '' ?> total

            </div>
        </div>


    </div>


</div>







<?php
require ('footer.php') ?>