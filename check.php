<?php 
$name = filter_var(trim($_POST["name"]),
FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST["last_name"]),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST["email"]),
FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST["phone"]),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]),
FILTER_SANITIZE_STRING);

if(mb_strlen($name) < 1 || mb_strlen($name) > 30)
{
    echo " invalid name length (от 2 до 40 символов)";
    exit();
}
 else if (mb_strlen($last_name) <=1 || mb_strlen($last_name) > 30)
{
    echo " invalid surname length  (от 2 до 40 символов)";
    exit();
} 
else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 20)
{
    echo " invalid password length (от 5 до 30 символов)";
    exit();
}

$mysql = new mysqli('localhost','root','345','users-bd');
$mysql->query("INSERT INTO`reg-users`(`Name`, `Last_Name`, `email`, `phone`,`pass`)
VALUES('$name','$last_name','$email','$phone','$pass')");
$mysql->close();

header('Location: message.html');
$name = $_POST['name'];
$surname = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['message'];

$to = "kirill.lozanov69@gmail.com"; 
$date = date ("d.m.Y"); 
$time = date ("h:i");
$from = $email;
$subject = "Заявка c сайта";


$msg="
Имя: $name /n
Фамилия: $surname /n
Телефон: $phone /n
Почта: $email /n
Текст: $text"; 	
mail($to, $subject, $msg, "From: $from ");
?>