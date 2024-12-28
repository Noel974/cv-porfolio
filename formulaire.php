<?php
// Adresse du destinataire
$destinataire = 'noelantoine974@outlook.fr';

// Validation des données envoyées par POST
$expediteur = filter_var($_POST['name2'], FILTER_SANITIZE_STRING);
$adresse_expd = filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars($_POST['message2']);

// Vérification des champs obligatoires
if (!$expediteur || !$adresse_expd || !$message) {
    echo "Veuillez remplir tous les champs correctement.";
    exit;
}

// Sujet et en-têtes
$sujet = "Nouveau message de " . $expediteur;
$headers = "From: " . $adresse_expd . "\r\n";
$headers .= "Reply-To: " . $adresse_expd . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi de l'email
if (mail($destinataire, $sujet, $message, $headers)) {
    echo 'Votre message a bien été envoyé.';
} else {
    echo "Votre message n'a pas pu être envoyé.";
}
?>
