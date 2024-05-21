<?php
/* $parfums = [
    'frais' => 3,
    'chocolat' => 5,
    'vanille' => 6
]; */


require ('header.php');
require ('technique/traite.php');

?>


<h1>
    le jeux de devinette
</h1>


</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="#" method="GET">
                <h4> Parfums:</h4>
                <?php foreach ($parfums as $parfum => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('parfum', $parfum, $_GET); ?>
                            <?= $parfum ?> -
                            <?= $prix ?> €
                        </label>
                    </div>

                <?php endforeach ?>
                <h4> Cornets:</h4>
                <?php foreach ($cornets as $cornet => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= radio('cornet', $cornet, $_GET); ?>
                            <?= $cornet ?> -
                            <?= $prix ?> €
                        </label>
                    </div>

                <?php endforeach ?>

                <h4> supplement :</h4>
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




<pre>

  <?php
  var_dump($_GET);
  ?>
</pre>
<pre>

  <?php
  var_dump($_POST);
  ?>
</pre>
<?php

require ('footer.php');
?>