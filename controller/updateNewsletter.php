<?php


require_once "../model/Management.class.php";

$id_newsletter = $_POST['id_newsletter'];

Management::updateNewsletter($id_newsletter);

header('Location: ./../view/backoffice/newsletter.php');

var_dump($_POST['id_newsletter']);
