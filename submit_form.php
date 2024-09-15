<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "tonemail@example.com"; // Remplace par ton adresse email
    $subject = "Formulaire de Contact";
    $body = "Nom: $name\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Merci pour votre message !";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
