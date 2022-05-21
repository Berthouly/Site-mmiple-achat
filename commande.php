<?php
     require 'lib.inc.php';
     if (empty($_SESSION['numero_client'])) {
         $_SESSION['erreur']='<h3 class="erreur">
             Désolé, vous n\'êtes pas connecté.e !</h3>'."\n";
         header('Location: connexion.php');
     } else if (empty($_SESSION['panier'])) {
         $_SESSION['erreur']='<h3 class="erreur">
             Désolé, votre panier est vide !</h3>'."\n";
         header('Location: jeux.php');
     } else {
         
         
$aujourdhui=date('Y-m-d');
echo '<p>Date du jour : '.$aujourdhui.'</p>'."\n";
$mabd=connexionBD();
foreach ($_SESSION['panier'] as $numerojeu=>$info) {
    $req='INSERT INTO mmiple_acheter (jeu_code_, client_code_, acheter_date,
    acheter_qte, acheter_prix_unit)
    VALUES ('.$numerojeu.','.$_SESSION['numero_client'].',"'.$aujourdhui.'", '.$info['quantite'].', '.$info['prix'].')';
    $resultat=$mabd->query($req);
    $lignes_resultat=$resultat->rowCount();
    if ($lignes_resultat==0) { 
        echo '<h3 class="erreur">Erreur d\'insertion dans la table "acheter" !</h3>';
die(); }
}
     }
deconnexionBD($mabd);
$_SESSION['merci']='<h3 class="merci">Votre commande a été validée ! Merci pour votre commande</h3>';
 unset($_SESSION['panier']);
 header('Location: jeux.php');