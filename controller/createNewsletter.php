<?php

require_once "../model/Management.class.php";

$createNewsletter = Management::createNewsletter("$newsletter");

$newsletter = new Newsletter();
$newsletter->setEmail("unknown@gmail.com");
$newsletter->setJours("07/09/2023");
$newsletter->setEtat(0);


$result = Management::createNewsletter($newsletter);

if ($result > 0) {
    echo "Le Mail a bien été envoyé !";
} else {
    echo "Une erreur s'est produite lors de l'envoi du coupon de reduction";
}
