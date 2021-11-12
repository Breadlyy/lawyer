<?php
require 'email.php';
$message = $_POST['message'];
$from = "kirill.lozanov69@gmail.com";
$subject = "Заявка c сайта";
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$text = "$message";

$msg=" 
Имя: $name 
Фамилия: $surname
Телефон: $phone 
Почта: $email 
Текст: $text"; 	
mail($email, $subject, $msg,  $from);

?>


