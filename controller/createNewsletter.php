<?php

require_once "./../model/Management.class.php";

session_start();

$recupEmail = htmlspecialchars($_POST['email']);
$recupDate = date('Y-m-d H-i-s');
$recupEtat = $_POST['etat'];


$newEmail = new Newsletter($recupEmail, $recupDate, $recupEtat);
Management::createNewsletter($newEmail);

if ($newMail) {
    $_SESSION['notification2'] = "Vous recevrez bientot votre coupon de reduction !";
} else {
    $_SESSION['notification3'] = "Une erreur s'est produite lors de votre inscirption à la newsletter.";
}
