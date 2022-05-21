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
 <p>
 <?php
 $co=connexionBD();
 if (isset($_GET['action'])){ // On recupére dans l'adresse ce qu'il y a dans la var 'action'
    if ($_GET['action']=='plus'){ // Si action='plus' alors
        $_SESSION['panier'][$_GET['jeu_id']]['quantite']++; // On va dans la session panier on récupère l'id du jeu via l'adresse aussi et on récupère la quantité qu'on augmente de 1
    }
    elseif ($_GET['action']=='moins'){ // Comme au dessous mais pour moins.
        $_SESSION['panier'][$_GET['jeu_id']]['quantite']--;
    }
}
 echo afficherPanier($co);
 deconnexionBD($co);
 echo '<div id="commande"><span class="fondRouge"><a href="commande.php">Commander</a></span></div>';

 ?>
 </p>
 </div>
 <?php require 'fin_html.inc.php'; ?>