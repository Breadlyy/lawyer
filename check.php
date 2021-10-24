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

if(mb_strlen($name) <=1 || mb_strlen($name) > 30)
{
    echo " Недопустимая длина имени (от 2 до 40 символов)";
    exit();
}
 elseif (mb_strlen($last_name) <=1 || mb_strlen($last_name) > 30)
{
    echo " Недопустимая длина имени (от 2 до 40 символов)";
    exit();
} 
elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 20)
{
    echo " Недопустимая длина пароля(от 5 до 30 символов)";
    exit();
}

$mysql = new mysqli('localhost','root','345','users-bd');
$mysql->query("INSERT INTO`reg-users`(`Name`, `Last_Name`, `email`, `phone`,`pass`)
VALUES('$name','$last_name','$email','$phone','$pass')");
$mysql->close();

header('Location: /index.php');
?>