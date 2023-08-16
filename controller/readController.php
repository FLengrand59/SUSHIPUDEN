<?php

// require_once "./../../model/Management.class.php";

// $recupAllContact = Management::readContacts("");


// Lire message formulaire dans la page contact
// attention au chemin de tes Model

require_once "../../model/management.class.php";

$recupFormContact = Management::readFormContact("");


$recupReservation = Management::readReservation("");
