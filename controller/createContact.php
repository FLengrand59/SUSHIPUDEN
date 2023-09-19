<?php
require_once "./../model/Management.class.php";
require_once "./../model/Contact.class.php";

// Validation et échappement des données
// Les données du formulaire en front sont validées et échappées correctement pour éviter les attaques XSS

$recupNom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
$recupPrenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '';
// La fonction filter_var est utilisée pour valider l'adresse e-mail.
$recupEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
// La fonction intval est utilisée pour garantir que l'ID de catégorie est un nombre entier positif.
$recupCategorie = isset($_POST['id_categories']) ? intval($_POST['id_categories']) : 0;
$recupMessage = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
$recupDate = date('Y-m-d H:i:s');

if ($recupNom && $recupPrenom && $recupEmail !== false && $recupCategorie > 0 && $recupMessage) {
    // Création de l'objet Contact en utilisant les données validées
    $newForm = new Contact($recupNom, $recupPrenom, $recupEmail, $recupMessage, $recupDate, 0, $recupCat);

    // Appel de la méthode de création du formulaire
    Management::createContact($newForm);

    // Redirection après traitement
    header('Location: ../index.php');
} else {
    // Gestion d'une validation incorrecte des données
    echo "Une erreur s'est produite dans le traitement du formulaire.";
}
