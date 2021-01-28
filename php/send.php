<?php

$recepient = "shsrdas@gmail.com";
$siteName = "Сайт-портфолио";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$inform = "Имя: $name \nE-mail: $email \nСообщение: $message";
$pagetitle = "Сообщение с \"$siteName\"";

// обработка данных
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);


$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);


$name = trim($name);
$email = trim($email);
$message = trim($message);


// отправка
mail($recepient, $pagetitle, $inform, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>