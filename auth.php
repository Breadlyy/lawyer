<?php

$email = filter_var(trim($_POST["email"]),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','345','users-bd');
$result =$mysql->query("SELECT * FROM `reg-users` WHERE `email` = '$email' AND 
`pass` = '$pass' ");
$user = $result->fetch_assoc();
if(count($user) == 0)
{
    echo "user does not exist";
    exit();
}
else
{

}

setcookie('user', $user['email'], time() + 60, "/");
$mysql->close();

header('Location: /index.php');

?>