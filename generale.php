<?php
require_once ('fonction/auth.php');
force_connecter_utilisateur();
$title = "generale";
require_once ('technique/traite.php');
require_once ('header.php');
require_once ('technique/crenneaux.php');


$year = (int) date('Y');
$mois = date('m');
$annee_selction = empty($_GET['annee']) ? $year : (int) $_GET['annee'];
$mois_selection = empty($_GET['mois']) ? $mois : $_GET['mois'];

$detail = detait_vues_par_mois($annee_selction, $mois_selection);

if ($annee_selction && $mois_selection) {

    $nombre = vues_par_mois($annee_selction, $mois_selection);

} else {
    $nombre = reuperer_les_vues();
}
?>
<?php force_connecter_utilisateur(); ?>
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
            <?php if (isset($detail) && !empty($detail)): ?>
                <h2> details de screneaux</h2>

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>
                                Année
                            </th>
                            <th>
                                Mois
                            </th>
                            <th>
                                Jour
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                    <tbody>
                        <?php foreach ($detail as $lines): ?>
                            <tr>
                                <td>
                                    <?= $lines['annee'] ?>
                                </td>
                                <td>
                                    <?= $lines['$mois'] ?>
                                </td>
                                <td>
                                    <?= $lines['jour'] ?>
                                </td>
                                <td>
                                    <?= $lines['total'] ?>
                                </td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    </thead>
                </table>
            <?php endif ?>
        </div>
    </div>
</div>

<?php
require ('footer.php') ?>