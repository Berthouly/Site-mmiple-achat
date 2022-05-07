<?php
require 'lib.inc.php';
require 'debut_html.inc.php';
require 'menu_html.inc.php';
?>

    <div id="contenu">
        <h1>Liste de nos jeux</h1>
        <p>
            <?php

                $co=connexionBD(); // se connecter à la base de données
                afficherJeux($co); // afficher les jeux
                deconnexionBD($co); // se déconnecter de la base de données
            ?>
        </p>
    </div>

<?php require 'fin_html.inc.php'; ?>