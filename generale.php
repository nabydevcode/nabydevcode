<?php

$title = "generale";
require ('technique/traite.php');
require ('header.php');
require ('technique/crenneaux.php');

$year = (int) date('Y');
$mois = date('m');
$annee_selction = empty($_GET['annee']) ? '' : (int) $_GET['annee'];
$mois_selection = empty($_GET['mois']) ? '' : $_GET['mois'];

if ($annee_selction && $mois_selection) {

    $nombre = vues_par_mois($annee_selction, $mois_selection);

} else {
    $nombre = reuperer_les_vues();
}

?>
<div class="container">
    <h1> Deshabord de mon site</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <div class="list-group  text-center">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <a class="list-group-item <?= $year - $i === $annee_selction ? 'active' : ''; ?>"
                            href="generale.php?annee=<?= $year - $i ?>">
                            <?= $year - $i ?>
                        </a>
                        <?php if ($year - $i === $annee_selction): ?>
                            <div class="list-group">
                                <?php foreach (MOIS as $key => $value): ?>
                                    <a class="list-group-item <?= $mois_selection === $key ? 'active' : ''; ?> "
                                        href="generale.php?annee=<?= $annee_selction ?>&mois=<?= $key ?>">
                                        <?= $value ?>
                                    </a>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
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
</div>

<?php
require ('footer.php') ?>