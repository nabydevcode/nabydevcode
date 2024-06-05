<?php

$titlte = "login";
require_once ('header.php');
require_once ('technique/traite.php');
$nombre = reuperer_les_vues();
$error = "";
if (!empty($_POST['emails']) && !empty($_POST['password'])) {
    if ($_POST['emails'] === 'toure@gmail.com' && $_POST['password'] === 'toure') {
        session_start();
        $_SESSION['ouvert'] = 1;
        header('Location:/generale.php');
        $error = " vos données sont correctes";
    } else {
        $error = " vos donnés ne sont pas correctes ";
    }
}
?>
<?php if ($error): ?>
    <div class="alert alert-success mt-2">
        <?= $error ?>
    </div>
<?php else: ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif ?>
<div class="container mt-3">
    <form action="" method="POST">
        <input type="email" name="emails" class="form-control" placeholder="votre email">
        <input type="password" name="password" class="form-control " placeholder="votre de mots pass">
        <button type="submit" class="btn btn-primary mt-2"> Connecter</button>
    </form>
</div>
<?php
require_once ('footer.php');
?>