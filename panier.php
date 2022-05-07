<?php
 require 'lib.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
 <?php
 require 'debut_html.inc.php';
 require 'menu_html.inc.php';
 ?>
 <div id="contenus">
 <h1>Votre panier</h1>
 <p>Voici les jeux sélectionnés :</p>
 <?php var_dump($_SESSION); ?>
 <p>
 <?php
 $co=connexionBD();
 echo afficherPanier($co);
 deconnexionBD($co);
 ?>
 </p>
 </div>
 <?php require 'fin_html.inc.php'; ?>