<?php

$title = "nous-contact";
$nav = "contact";

require ('header.php');
require ('technique/crenneaux.php');
require ('technique/traite.php');

date_default_timezone_set('Europe/Paris');

$heure = (int) date('G');
$creneaux = SCRENNEAUX[date('N') - 1];

$ouvert = ouverture($creneaux, $heure);



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
            <?php if ($ouvert): ?>
                <div class="alert alert-success">
                    Le magain est ouvert
                </div>
            <?php else: ?>
                <div class="alert alert-danger">
                    Le magain est fermé
                </div>
            <?php endif ?>
            <?php foreach (SEMAINE as $key => $day): ?>
                <li>
                    <?= (horaire(SCRENNEAUX[$key])) ?>
                </li>
            <?php endforeach ?>
        </div>
    </div>

</div>








<?php

require ('footer.php');
?>