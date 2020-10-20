<?php
$destinataire = 'antoinenoel974@gmail.com';
$expediteur = $_POST['name2'];
$adress_expd = $_POST['email2'];
$message = $_POST['message2'];
mail($destinataire, $expediteur,  $message, $adress_expd); //
if (mail($destinataire, $expediteur,  $message, $adress_expd)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
?>