<?php
session_start();
unset($_SESSION['ouvert']);
header('Location:/login.php');
