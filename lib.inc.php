<?php
session_start();

 function connexionBD()
 {
 $mabd=null;
 try {
    $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
dbname=mmi21a02;charset=UTF8;', 'mmi21a02', 'Aurelien_85%');
    $mabd->query('SET NAMES utf8;');
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . '<br />';
    die();
}
 return $mabd;
 }


 function deconnexionBD(&$mabd) {
 $mabd=null;
 }
 function afficherJeux($mabd) {
 $req ="SELECT * FROM mmiple_jeux"; // créer la requête
 try {
 $resultat = $mabd->query($req); // exécuter la requête
 } catch (PDOException $e) {
 echo '<p>Erreur : '.$e->getMessage().'</p>'; die();
 die();
 }
 $lignes_resultat = $resultat->rowCount();
 if ($lignes_resultat>0) { // y a-t-il des résultats ?
 // oui : pour chaque résultat : afficher
 while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="unJeu">'."\n";
                echo '    <div class="nomDuJeu">'.$ligne['jeu_nom'].'</div>';
                echo '    <div class="editeurDuJeu"><span class="material-symbols-outlined">account_circle</span>édité par '.$ligne['jeu_editeur'].'</div>';
                echo '    <div class="dureeDuJeu"><span class="material-symbols-outlined">timer</span>pour des parties d\'environ '.$ligne['jeu_duree_partie'].' minutes.</div>';
                echo '    <div class="editeurDuJeu"><span class="material-symbols-outlined">group_add</span>pour (min./max.) joueurs : (';
                echo $ligne['jeu_nb_joueurs_mini'].' / '.$ligne['jeu_nb_joueurs_maxi'].')';
                echo '</div>';
                echo '    <div class="imagesDuJeu">';
                echo '      <img src="'.$ligne['jeu_photo1'].'" alt="photo1" class="imageDuJeu" />';
                echo '      <img src="'.$ligne['jeu_photo2'].'" alt="photo2" class="imageDuJeu" />';
                echo '      <img src="'.$ligne['jeu_photo3'].'" alt="photo3"  class="imageDuJeu" />';
                echo '    </div>'."\n";
                echo '<div class="ajout_panier"><a href="ajout_panier.php?jeu_id='.$ligne['jeu_code'].'">Ajouter au panier</a></div>'."\n";

                echo '</div>'."\n";

            }
        } else { 
                echo '<p>Pas de résultat !</p>';
            }
    }// fonction qui récupère les informations sur un jeu
// et les retourne ou bien retourne null si le jeu n'existe pas
function recuperer_jeu($co, $id) {
    $req="SELECT * FROM mmiple_jeux WHERE jeu_code=".$id; // créer la requête
    //echo '<p>'.$req.'</p>'."\n";
    try {
    $resultat=$co->query($req); // exécuter la requête
    } catch (PDOException $e) {
    print "Erreur : ".$e->getMessage().'<br />'; die();
    }
    // compter le nombre de résultats
    $lignes_resultat=$resultat->rowCount();
    if ($lignes_resultat>0) { // y a-t-il des résultats ?
    // oui : pour chaque résultat : afficher
    return $resultat->fetch(PDO::FETCH_ASSOC);
    } else {
    // non, on renvoie la valeur "null"
    return null;
    }
   }

   function panier_total_jeux(){
    $total=0;
    if (isset($_SESSION['total_jeux'])) {
        $total=$_SESSION['total_jeux'];
        if ($total>9){
            $total="+9";
        }
    }
    return $total;
}

// fonction afficherPanier() qui affiche le contenu
 // du panier sous la forme d'une table HTML
 function afficherPanier($co)
 {
     if (empty($_SESSION['panier'])) { // la panier est vide ?
         $tablePanier = '<p class="erreur">Désolé, votre panier est vide !</p>';
     } else { // sinon le panier contient quelque chose
         $tablePanier = '<table id="tablePanier">' . "\n";
         $tablePanier .= '<thead><th>Jeu</th><th>Prix</th>
     <th>Quantité</th><th>Total</th></thead>' . "\n";
         foreach ($_SESSION['panier'] as $id => $jeu) {
             $tablePanier .= '<tr>';
             $infos = recuperer_jeu($co, $id);
             $tablePanier .= '<td><span class="ImageJeuPanier"><img src="' . $infos['jeu_photo1'] . '" width="100px"/></span>' . "\n";
             $tablePanier .= $jeu['nom'] . '</td>';
             $tablePanier .= '<td>' . $jeu['prix'] . '</td>';
             $tablePanier .= '<td>';
             $tablePanier .= '<span class="fondRouge"><a href="panier.php?moins"' . $id . '>-</a></span>';
             $tablePanier .= $jeu['quantite'];
             $tablePanier .= '<span class="fondRouge"><a href="panier.php?plus"' . $id . '>+</a></span>';
             $tablePanier .= '</td>';
             $totalJeu = $jeu['prix'] * $jeu['quantite'];
             $sommeTotaleJeux += $totalJeu;
             $tablePanier .= '<td>' . $totalJeu . '</td>';
             $tablePanier .= '</tr>';
         }
 
         $tablePanier.='<thead><th colspan="3">Total de la commande : </th>';
         $tablePanier.='<th>' .$sommeTotaleJeux. '$euro;</th></thead>';
         $tablePanier .= '</table>' . "\n";
     }     
     return $tablePanier;
    }
 