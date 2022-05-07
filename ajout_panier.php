<?php
    require 'lib.inc.php';
    $co=connexionBD();

    if (!empty($_SESSION['prenom_client'])) {
        $idJeu = $_GET['jeu_id'];
        $infos = recuperer_jeu($co, $idJeu);
        //var_dump($infos);
        if (!empty($_SESSION['panier'][$idJeu])){
                $_SESSION['panier'][$idJeu]['quantite']++;
                $_SESSION['total_jeux']++;
        } else{
            $_SESSION['panier'][$idJeu]=[ 'nom'=>$infos['jeu_nom'], 'prix'=> $infos['jeu_prix_unit'], 'quantite'=>1 ];
            $_SESSION['total_jeux']++;


        }
        header('Location:jeux.php');
    }
    else{
        header('Location:connexion.php');
    }

    deconnexionBD($co);
    require 'fin_html.inc.php';

    
?>