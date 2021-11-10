<?php
    $name = $_POST['name'];
    $surname = $_POST['last_name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	$to = "kirilllozanov012@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Name: $name /n
    Surname: $surname /n
    Phone: $phone /n
    Email: $email /n
    Message: $message"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
