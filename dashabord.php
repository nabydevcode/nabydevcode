<?php
require_once ('fonction/auth.php');
force_connecter_utilisateur();
$title = "deshabord";

require ('header.php');
require ('technique/traite.php');

$nombre = reuperer_les_vues();


?>

<?php

vues_incrementer();
?>

<h1>bienvenue sur le dashabord</h1>



<?php
require ('footer.php');
?>