<?php

require_once "./../../model/Management.class.php";

$recupAllContact = Management::readContacts("");


// Lire message formulaire

require_once "../model/management.class.php";

$recupFormContact = Management::readFormContact("");
