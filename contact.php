<?php
require 'lib.inc.php';
require 'debut_html.inc.php';
require 'menu_html.inc.php';
?>
<div class="container">
<form method="POST" action="envoyer_mail.php">
  <div class="en-tete">
    <div>
    <label for="prenom">Prénom</label>
    <input type="text" id="fname" name="prenom" placeholder="Ton Prénom..">
</div>
<div>
    <label for="nom">Nom</label>
    <input type="text" id="lname" name="nom" placeholder="Ton nom..">
</div>
</div>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Ton email..">

    <label for="message">Message</label>
    <textarea id="subject" name="message" placeholder="Ecrire quelque chose.." style="height:120px"></textarea>

    <input type="submit" value="Envoyer">

  </form>
</div>
</section>