<?php

require_once "./../model/Management.class.php";
require_once "./../model/Newsletter.class.php";

Management::deleteNewsletter($_POST[$id_newsletter]);

header('Location: ./../view/backoffice/newsletter.php');
