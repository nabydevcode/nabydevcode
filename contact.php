<?php

$title = "nous-contact";
$nav = "contact";
require ('header.php');
require ('technique/crenneaux.php');
require ('technique/traite.php');

date_default_timezone_set('Europe/Paris');

$heure = (int) date('G');
$jour = (int) date('N');
$creneaux = SCRENNEAUX[date('N') - 1];
$ouvert = ouverture($creneaux, $heure);
if ($ouvert) {
    $color = 'green';
} else {
    $color = 'red';
}


if (isset($_GET['jour'], $_GET['heure']) && !empty($_GET['jour']) && !empty($_GET['heure'])) {



    print_r($_GET);


}


?>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-6">
            <h1> Nous contacter Contacter</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugit eveniet ex saepe, laborum
            quibusdam blanditiis
            commodi reprehenderit dolor facilis voluptas sequi? Veniam at molestias autem corrupti incidunt, sequi
            distinctio.
            Adipisci delectus beatae voluptatibus provident minima cumque hic voluptates doloribus officia pariatur!
            Rerum
            reprehenderit, alias ad ab deleniti earum fugit suscipit quod maxime! Mollitia dolorem adipisci dolorum est
            ipsam
            facilis.
        </div>
        <div class="col-6">
            <h3> les heures d'ouvertures </h3>
            <form action="" method="GET">
                <select class="form-control" name="heure">
                    <option value="">Choissisez le jour </option>
                    <?php foreach (SEMAINE as $key => $value): ?>
                        <option value="<?= $value ?>">
                            <?= $value ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <select name="heure" class="form-control">
                    <option value="">Choissisez l'heure d'ouverture </option>
                    <?php for ($i = 1; $i < 25; $i++): ?>
                        <option value="<?= $i ?> ">
                            <?= $i ?>h
                        </option>

                    <?php endfor ?>
                </select>

                <button type="submit" class="btn btn-success">
                    envoyer
                </button>
            </form>


            <?php if ($ouvert): ?>
                <div class="alert alert-success">
                    le magasin est ouvert
                </div>
            <?php else: ?>
                <div class="alert alert-danger">
                    le magasin est fermé
                </div>
            <?php endif ?>
            <?php foreach (SEMAINE as $key => $day): ?>
                <li <?php if ($key + 1 === $jour): ?> style="color:<?= $color ?>" <?php endif ?>>
                    <strong>
                        <?= $day ?>:
                    </strong>
                    <?= genererhoraire((SCRENNEAUX[$key])) ?>
                </li>
            <?php endforeach; ?>

        </div>
    </div>

</div>

<?php

require ('footer.php');
?>