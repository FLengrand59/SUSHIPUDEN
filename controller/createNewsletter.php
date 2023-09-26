<?php

require_once "./../model/Management.class.php";
require_once "./../model/Newsletter.class.php";

// Démarre la session pour les notifications
session_start();

$recupEmail = htmlspecialchars($_POST['mail']);
$recupDate = date('Y-m-d H:i:s');
$recupEtat = $_POST['etat'];

// Validation et échappement des données
$newEmail = new Newsletter($recupEmail, $recupDate, $recupEtat);
Management::createNewsletter($newEmail);


// if ($newEmail) {
//     // Stockage de la notification dans la variable de session
//     $_SESSION['notification2'] = "Vous recevrez bientôt votre coupon de réduction !";
// } else {
//     // Gestion d'une validation incorrecte des données
//     $_SESSION['notification3'] = "Une erreur s'est produite lors de l'inscription à la newsletter.";
// }

// header('Location: ../index.php');
var_dump($newEmail);

//ici on va var_dump l'objet qu'on instantcie, qu'on créer !