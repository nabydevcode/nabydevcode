<?php
require_once ('fonction/auth.php');
force_connecter_utilisateur();
require_once ('technique/traite.php');
$nombre = reuperer_les_vues();
$title = "home";
$nav = "index";
require_once ('header.php');
$message = "";
$email = null;
if (isset($_POST['emails']) && !empty($_POST['emails'])) {
    $email = filter_var($_POST['emails'], FILTER_VALIDATE_EMAIL);
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . date('m-d-y') . '.txt';
    if (file_exists($file)) {
        $emails_in_file = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (in_array($email, $emails_in_file)) {
            $message = " Cet email est deja utiliser";
        } else {
            file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
            $message = "Email ajouter avec success";
        }
    } else {
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $message = "Nouveau fichier creer avec cet E-mail";
    }
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1> S'inscrire a Newletter
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nihil, commodi hic itaque asperiores in
                officiis
                excepturi accusamus. Quaerat necessitatibus maiores ab consequuntur fugiat, minus ad distinctio
                exercitationem
                cupiditate omnis.
                Nobis voluptatem itaque suscipit dignissimos magni quod qui iusto esse blanditiis culpa voluptate, sunt
                explicabo
                dolorem placeat pariatur odit cum vel eligendi, repellendus impedit. Fugit animi quos et aut neque!
                Quae dolor quod asperiores suscipit harum eaque tempora corporis officiis maxime nisi! Ratione sapiente
                earum
                placeat deleniti! Ullam, officia. Debitis maiores eligendi molestiae a laudantium dolores iste ut modi
                repellendus.
            </p>
            <?php if (!$message): ?>
                <div class="alert alert-warning">
                    <?= $message ?>
                </div>
            <?php else: ?>
                <div class="alert alert-success">
                    <?= $message ?>
                </div>
            <?php endif ?>
            <form action="" method="POST">
                <input type="email" name="emails" placeholder="exemple@.com">
                <button type="submit" class="btn  btn-primary ">envoyer</button>
            </form>
        </div>
    </div>
</div>
<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <span class="text-body-secondary">Place sticky footer content here.</span>
    </div>
</footer>
<?php
require ('footer.php');
?>