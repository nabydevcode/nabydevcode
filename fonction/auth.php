<?php

function is_connecte(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['ouvert']);
}
function force_connecter_utilisateur(): void
{
    if (!is_connecte()) {
        header('Location:/login.php');
        exit;
    }
}

