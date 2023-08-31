<?php

// require_once "../model/Management.class.php";

// $createReservation = Management::createReservation("$reservation");

// require_once "../model/Management.class.php";

// $reservation = new Reservation();
// $reservation->setNom("Lengrand");
// $reservation->setPrenom("Florian");
// $reservation->setEmail("f.lengrand@hotmail.com");
// $reservation->setTel("0782996686");
// $reservation->setDate("01/09/2023");
// $reservation->setNbre_Couverts(1);
// $reservation->setService("midi");
// $reservation->setEtat(0);

// $result = Management::createReservation($reservation);

// if ($result > 0) {
//     echo "Réservation créée avec succès !";
// } else {
//     echo "Une erreur s'est produite lors de la création de la réservation.";
// }


// Appelle de ta classe de fonction Management
require_once "./../model/Management.class.php";
// Appelle de ta classe Reservation avec son pattern prédefini
require_once "./../model/Reservation.class.php";

// on recupére les données du formulaire
$recupNom = $_POST['nom'];
$recupPrenom = $_POST['prenom'];
$recupEmail = $_POST['email'];
$recupTel = $_POST['telephone'];
$recupDate = $_POST['date'];
$recupCouverts = $_POST['couverts'];
$recupService = $_POST['service'];
// ici l'état est input hidden dans le form car c'est par défaut à 0 car la reservation est a confirmer
$recupEtat = '0';

// ici on lui dit que $newResa est une nouvelle instanciation de la class Reservation c'est a dire qu'on crée une nouvelle reservation en bdd
$newResa = new Reservation($recupNom,$recupPrenom,$recupEmail,$recupTel,$recupDate,$recupCouverts,$recupService,$recupEtat);
// Appel de la fonction statique createReservation 
Management::createReservation($newResa);

// var_dump($newResa);
// une fois que le code s'execute on refresh la page
header('Location: ./../view/backoffice/index.php');

// direction dans la backoffice page index pour créer une reservation.