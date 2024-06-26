<?php

require_once ('fonction/auth.php');
force_connecter_utilisateur();
$title = "menu_restaurant";
require ('header.php');
require ('technique/traite.php');
$nombre = reuperer_les_vues();
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'recipes.tsv';
$data = read_csv($fichier);

?>

<h1> Menu d'aujourdhui</h1>



<?php foreach ($data as $value): ?>

    <?php if (count($value) === 1): ?>


        <h2>
            <?= $value[0] ?>
        </h2>
    <?php else: ?>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    <strong>
                        <?= $value[0] ?> </br>
                    </strong>

                    <?= $value[1] ?>
                </p>

            </div>
            <div class="col-sm-4">
                <strong>
                    <?= $value[2] ?> €
                </strong>

            </div>
        </div>



    <?php endif ?>



<?php endforeach ?>


<?php
require ('footer.php');
?>