<?php
if (count($_POST)==0) {
    header('Location: contact.php');
}

if (!empty($_POST['prenom'])) {
    $prenom=$_POST['prenom'];
echo 'Le prénom est : '.$prenom.'<br />'."\n";
} else {
    echo "Erreur : le prénom est vide !"."\n";
    exit(0);
}

if (!empty($_POST['nom'])) {
    $nom=$_POST['nom'];
echo 'Le nom est : '.$nom.'<br />'."\n";
} else {
    echo "Erreur : le nom est vide !"."\n";
    exit(0);
}

if (!empty($_POST['email'])) {
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email=$_POST['email'];
    echo 'L\'email est : '.$email.'<br />'."\n";
} else {
echo "Erreur : l\email n'est pas valide !"."\n";
exit(0);

}

} else {
    echo "Erreur : l\email est vide !"."\n";
    exit(0);
}

if (!empty($_POST['message'])) {
    $message=ucfirst(mb_strtolower($_POST['message']));
    echo 'Le message est : '.$message.'<br />'."\n";
} else {
    echo "Erreur : le message est vide !"."\n";
    exit(0);
}

$messages='Message envoyé par : '.$prenom.' '.$nom."\n".$email."\n".$message;


$destinataire = 'jbjb19530@gmail.com';
$sujet = 'Demande de renseignement ---'.date('d/m/Y');
$headers = 'From: mmi21a02@mmi-troyes.fr' . "\r\n" .
   'Reply-To: mmi21a02@mmi-troyes.fr' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

if (mail($destinataire, $sujet, $messages, $headers)) {
    echo 'Message envoyé: OK !'."\n";
} else {
    echo 'Erreur : message non envoyé !'."\n";
}
if (!empty($_POST)>0) {

    header('Location: index.php');
}