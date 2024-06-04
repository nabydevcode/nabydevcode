<?php


//fonction pour la connexion 

function is_connecte()
{
    if (!empty($_SESSION['ouvert'])) {
        return true;
    } else {
        return false;
    }

}

function nav_item($lien, $titre): string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= 'active';
    }
    return <<<HTML
    <li class="$classe p-2" aria-current="page">
        <a class="nav-link text-white bg-dark"   href="$lien">$titre</a>
    </li>
    HTML;
}
