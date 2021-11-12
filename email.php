<?php 
 $name = $_POST['name'];
 $surname = $_POST['last'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $to = "kirill.lozanov69@gmail.com"; 
 $from = $email;
 $subject = "Заявка c сайта";
 $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 $text = "Здравствуйте, $name вы были успешно зарегестрированы на сайте адвокатской конторы Лозанова Виктора($url)\n Теперь вы можете написать о вашей проблеме на нашем сайте(по необходимости можно прикрепить файл)";
 
 $msg=" 
 Имя: $name 
 Фамилия: $surname
 Телефон: $phone 
 Почта: $email 
 Текст: $text"; 	
 mail($email, $subject, $msg, "From: $from ");

?>