<?php

require ('header.php');
require ('technique/traite.php');

$ingrediens = [];
$total = 0;


foreach (['parfum', 'supplement'] as $name) {
    if (isset($_GET[$name]) && !empty($_GET[$name])) {
        $par = $_GET[$name];
        $liste = $name . 's';
        foreach ($par as $value) {
            if (isset($$liste[$value])) {
                $ingrediens[] = $value;
                $total += $$liste[$value];
            }
        }

    }
}
if (isset($_GET['cornet']) && !empty($_GET['cornet'])) {

    $ingrediens[] = $_GET['cornet'];
    $total += $cornets[$_GET['cornet']];

}

/* if (isset($_GET['supplement']) && !empty($_GET['supplement'])) {
    $sups = $_GET['supplement'];
    foreach ($sups as $sup) {
        if (isset($supplements[$sup])) {
            $ingrediens[] = $sup;
            $total += $supplements[$sup];
        }
    }

} */






?>



</div>
<div class="container mt-2">
    <div class="row justify-content-center">

        <div class="col-6">

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Votre glace
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