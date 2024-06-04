<?php
if (!function_exists('is_connecte')) {
    function is_connecte(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return !empty($_SESSION['ouvert']);
    }
}
if (!function_exists('force_connecter_utilisateur')) {
    function force_connecter_utilisateur()
    {
        if (!is_connecte()) {
            header('Location: /login.php');
            exit;
        }
    }
}
