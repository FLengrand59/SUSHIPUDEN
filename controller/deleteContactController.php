<?php

require_once "./../model/Management.class.php";
require_once "./../model/Contact.class.php";

Management::deleteContact($_GET[id_contact]);

header('Location: ./../view/backoffice/contact.php');

?>