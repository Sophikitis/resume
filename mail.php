<?php
$destinataire = 'jeremie.soffichiti@gmail.com';
// Adresse email du destinataire
$sujet = "Contact Form :" .$_POST['subject'];
// Titre de l'email
$message = $_POST['message'];
// Contenu du message de l'email
mail($destinataire, $sujet, $message);
// Fonction principale qui envoi l'email
header('Location: http://jeremie-soffichiti.fr');

?>