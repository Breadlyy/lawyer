<?php
    // Указываем кодировку
    header('Content-Type: text/html; charset=utf-8');

    $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
    $username = "Juggernaut"; /* Имя пользователя БД */
    $password = "Juggernaut"; /* Пароль пользователя БД, если у пользователя нет пароля то, оставляем пустым */
    $database = "users-bd"; /* Имя базы данных, которую создали */
 
    // Подключение к базе данных через MySQLi
    $mysqli = new mysqli('localhost','root','345','users-bd');

    // Проверяем, успешность соединения. 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }

    // Устанавливаем кодировку подключения
    $mysqli->set_charset('utf8');

    //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://lawyer";

    //Почтовый адрес администратора сайта
    $email_admin = "kirilllozanov012@gmail.com";
?>