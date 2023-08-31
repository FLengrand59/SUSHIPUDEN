<?php

require_once "../model/Management.class.php";

$createReservation = Management::createReservation("$reservation");

require_once "../model/Management.class.php";

$reservation = new Reservation();
$reservation->setNom("Lengrand");
$reservation->setPrenom("Florian");
$reservation->setEmail("f.lengrand@hotmail.com");
$reservation->setTel("0782996686");
$reservation->setDate("01/09/2023");
$reservation->setNbre_Couverts(1);
$reservation->setService("midi");
$reservation->setEtat(0);

$result = Management::createReservation($reservation);

if ($result > 0) {
    echo "Réservation créée avec succès !";
} else {
    echo "Une erreur s'est produite lors de la création de la réservation.";
}
