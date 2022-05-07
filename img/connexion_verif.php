<?php
 require 'lib.inc.php';
 $email=$_POST['email'];
 $mdp=$_POST['mdp'];
 $mabd=connexionBD();
 $req='SELECT * FROM clients WHERE client_email LIKE "'.$email.'"';
 //echo '<p>'.$req.'</p>';
 // on lance la requête
 $resultat=$mabd->query($req);
 // on calcule le nombre de lignes renvoyées
 $lignes_resultat=$resultat->rowCount();
 if ($lignes_resultat>0) { // y a-t-il des résultats ?
 // oui : pour chaque résultat : afficher
 $ligne=$resultat->fetch(PDO::FETCH_ASSOC);
 if (password_verify($mdp, $ligne['client_mdp'])) {
 echo '<p>OK... :)</p>';
 } else {
 echo '<p>KO... :(</p>';
 }
 }
 deconnexionBD($mabd);