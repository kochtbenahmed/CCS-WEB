<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "contact@ccstunisia.com";
$subject = "Nouveau message site CCS";
$body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

mail($to, $subject, $body);

echo "<p class='success'>Message envoyé avec succès.</p>";
