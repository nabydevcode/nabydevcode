<?php

$succes = "";
$perdu = "";
$magique = 60;

$valeur = $_GET['numero'];
$valeur = $_POST['numro'];

if (isset($valeur) && !empty($valeur)) {
    if ($magique === (int) $valeur) {
        $succes = " Bravo vous aviez trouver le nombre magique";
    } else {
        $perdu = " Desolé vous aviez perdu Resayer encore ";
    }
} else {
    echo "desolé";
}

require ('header.php');

?>


<h1>
    le jeux de devinette
</h1>

<?php if (isset($succes) && !empty($succes)): ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php elseif ($perdu): ?>
    <div class="alert alert-danger">
        <?= $perdu ?>
    </div>
<?php endif ?>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="#" methode="post">
                <input type="number" name="numero" class="form-control mb-2" placeholder="0-200"
                    value="<?php echo htmlspecialchars($valeur) ?>">
                <button type="submit" class="btn btn-primary">envoyer</button>
            </form>
        </div>
    </div>
</div>


<?php
echo "$-GET \n";
print_r($_GET['numero']) ?>

<?php
echo "\n"
    ?>
<?php



echo "$-POST \n";
print_r($_POST['numero'])
    ?>
<?php

require ('footer.php');
?>