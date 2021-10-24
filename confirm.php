<?php
    $token = md5($email.time());

    // Adding data to the table confirm-users
    $query_insert_confirm = $mysqli->query("INSERT INTO `confirm-users` (email, token, date_registration) VALUES ('".$email."', '".$token."', NOW()) ");
    if(!$query_insert_confirm)
    {
        $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавления пользователя в БД </p>";
        header('Location: /index.php');
        exit();

    } else {

//Составляем заголовок письма
$subject = "Подтверждение почты на сайте ".$_SERVER['HTTP_HOST'];
//Устанавливаем кодировку заголовка письма и кодируем его
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
//Составляем тело сообщения
$message = 'Здравствуйте! <br/> <br/> Сегодня '.date("d.m.Y", time()).', неким пользователем была произведена регистрация на сайте <a href="'.$address_site.'">'.$_SERVER['HTTP_HOST'].'</a> используя Ваш email. Если это были Вы, то, пожалуйста, подтвердите адрес вашей электронной почты, перейдя по этой ссылке: <a href="'.$address_site.'activation.php?token='.$token.'&email='.$email.'">'.$address_site.'activation/'.$token.'</a> <br/> <br/> В противном случае, если это были не Вы, то, просто игнорируйте это письмо. <br/> <br/> <strong>Внимание!</strong> Ссылка действительна 24 часа. После чего Ваш аккаунт будет удален из базы.';
//Составляем дополнительные заголовки для почтового сервиса mail.ru
//Переменная $email_admin, объявлена в файле dbconnect.php
$headers = "FROM: $email_admin\r\nReply-to: $email_admin\r\nContent-type: text/html; charset=utf-8\r\n";

if(mail($email, $subject, $message, $headers)){
    $_SESSION["success_messages"] = "<h4 class='success_message'><strong>Регистрация прошла успешно!!!</strong></h4><p class='success_message'> Теперь необходимо подтвердить введенный адрес электронной почты. Для этого, перейдите по ссылке указанную в сообщение, которую получили на почту ".$email." </p>";

    //Отправляем пользователя на страницу регистрации и убираем форму регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: ".$address_site."form_register.php?hidden_form=1"');
    exit();

}else{
    $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка при отправлении письма с сылкой подтверждения, на почту ".$email." </p>";
    header('Location: /index.php');
    exit(); 
}

$mysqli->close();
}
    
 
?>