<?php
require_once ('fonction/auth.php');
force_connecter_utilisateur();
require_once ('technique/traite.php');
require ('header.php');
$nombre = reuperer_les_vues();
$ingrediens = [];
$total = 0;
foreach (['parfum', 'supplement', 'cornet'] as $name) {
    if (!empty($_GET[$name])) {
        $par = $_GET[$name];
        $liste = $name . 's';
        if (is_array($par)) {
            if (isset($par) && !empty($par)) {
                $liste = $name . 's';
                foreach ($par as $value) {
                    if (isset($$liste[$value])) {
                        $ingrediens[] = $value;
                        $total += $$liste[$value];
                    }
                }
            }
        } else {
            if (!empty($par)) {
                if (isset($$liste[$par])) {
                    $ingrediens[] = $par;
                    $total += $$liste[$par];
                }
            }
        }

    }






}

?>
</div>
<div class="container mt-2">
    <div class="row justify-content-center">

        <div class="col-6">

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Votre glace :
                    </div>

                    <?php foreach ($ingrediens as $value):
                        ?>
                        <li>
                            <?= $value ?>
                        </li>
                    <?php endforeach ?>
                    Total:
                    <?= $total ?> €
                </div>

            </div>
        </div>

        <div class="col-6">
            <h2>
                Composé votre Glace
            </h2>
            <form action="#" method="GET">
                <h4>Choisissez Votre Parfums:</h4>
                <?php foreach ($parfums as $parfum => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('parfum', $parfum, $_GET); ?>
                            <?= $parfum ?> -
                            <?= $prix ?> €
                        </label>
                    </div>

                <?php endforeach ?>
                <h4> Choisissez Votre Cornets:</h4>
                <?php foreach ($cornets as $cornet => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= radio('cornet', $cornet, $_GET); ?>
                            <?= $cornet ?> -
                            <?= $prix ?> €
                        </label>
                    </div>

                <?php endforeach ?>

                <h4> choisissez le supplement :</h4>
                <?php foreach ($supplements as $supplement => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('supplement', $supplement, $_GET); ?>
                            <?= $supplement ?> -
                            <?= $prix ?> €
                        </label>
                    </div>

                <?php endforeach ?>
                <button type="submit" class="btn btn-primary">envoyer</button>
            </form>
        </div>


    </div>
</div>






<?php

require ('footer.php');
?>