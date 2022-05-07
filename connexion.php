<?php
 require 'lib.inc.php';
 require 'debut_html.inc.php';
 require 'menu_html.inc.php'; ?>
 <div id="contenu">
 <h1>Connexion</h1>
 <form action="connexion_verif.php" method="post">
 Adresse e-mail : <input class="feedback-input" type="text" name="email" /><br />
 Mot de passe : <input class="feedback-input" type="password" name="mdp" /><br />
 <input type="submit" value="Envoyer"> 
 <?php
 if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    require('fin_html.inc.php');
    ?>
 </form>
 </div>


