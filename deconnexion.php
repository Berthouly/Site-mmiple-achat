<?php
 require 'lib.inc.php';
 // on détruit les variables de session
 $_SESSION=array();
 session_destroy();
 // on se redirige vers la page d'accueil
 header('location:index.php');
?>