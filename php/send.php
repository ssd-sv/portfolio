<?php

// получение данных с элемента формы

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];




// обрабатываем полученные данные

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);


$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);


$name = trim($name);
$email = trim($email);
$message = trim($message);




// отправка данных

if (mail("kanva777@gmail.com",
         "Новое письмо с сайта-портфолио",
         "Имя: ".$login."\n".
         "E-mail: ".$email."\n".
         "Сообщение: ".$message."\n".)
)  {
  echo ('Your message has been sent successfully');
}

else {
  echo ('There is an error, please check your data');
}












?>
