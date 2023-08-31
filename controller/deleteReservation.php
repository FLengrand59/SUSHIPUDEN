<?php

require_once "../model/Management.class.php";
require_once "./../model/Reservation.class.php";

Management::deleteReservation($_GET[id_reservation]);

header('Location: ./../view/backoffice/resa.php');



