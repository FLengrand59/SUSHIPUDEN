<?php


require_once "../model/Management.class.php";

$id_newsletter = $_GET['id_newsletter'];

Management::updateNewsletter($id_newsletter);

header('Location: ./../view/backoffice/newsletter.php');
