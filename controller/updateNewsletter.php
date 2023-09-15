<?php

require_once "./../model/Management.class.php";
require_once "./../model/Newsletter.class.php";

$email = $_POST['email'];
$id_newsletter = isset($_GET['id_newsletter']) ? $_POST['id_newsletter'] : null;

Management::updateNewsletter($id_newsletter);

$to = $email;
$subject = "Coupon de réduction - Sushipuden";
$message = file_get_contents('../assets/template/tempCoupon.php');
$headers = "From: sushipuden@gmail.com\r\n";
$headers .= "Reply-To: sushipuden@gmail.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);

header('Location: ./../view/backoffice/newsletter.php');
