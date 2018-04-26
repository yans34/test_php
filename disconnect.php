<?php
session_start(); //on recupere la session.
session_destroy(); // on detruit toute les variables de sessions qui sont stockés.
header('location:login.php?error=Vous etes bien déconnéctés'); //on redirige vers login.php.
?>