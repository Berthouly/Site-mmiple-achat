<header>
    <img src="img/logo_mmiple.png" alt="mmiple logo" id="logo" />
    <nav>
        
        <a href="index.php">Accueil</a> -
        <a href="jeux.php">Jeux</a> -
        <a href="contact.php">Contact</a>
    </nav>
    <div id="connexion">
 <a href="panier.php">
 <span class="uk-badge" id="panier_jeux">
 <?php echo panier_total_jeux(); ?>
</span>
 <img height="34" src="img/caddie.png" id="panier" />
 </a>  

 &nbsp;
        <?php
        if (empty($_SESSION['prenom_client'])) {
            echo '<a href="connexion.php">Connexion</a> / <a href="inscription.php">Inscription</a>';
        } else {
            echo 'bonjour, ' . $_SESSION['prenom_client'] . ' <a href="deconnexion.php">Déconnexion</a>';
        }
        ?>
</div>
</header>
