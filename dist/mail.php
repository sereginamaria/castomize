<?php

require_once('PHPMailer.php');
require_once('SMTP.php');
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
// IP или хостнейм сервера, на котором находится Ваш почтовый аккаунт. Этот адрес Вы можете найти в письме с данными от хостинг-аккаунта.
$mail->Host = 'castomize.h1n.ru';
$mail->SMTPAuth = true;
// наименование почтового ящика, или логин на почтовом сервере. Как правило, Вы указываете его, когда создаете почтовый ящик.
$mail->Username = 'info@castomize.h1n.ru';
// пароль от почтового ящика.
$mail->Password = '26v26m04m30b';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true, ] ];

// далее следует код, который отвечает за отправку письма
// укажите почтовый ящик отправителя. Рекомендуем указывать такой же, который указываем в авторизационных данных - LOGIN@DOMAIN.RU
$mail->From = 'info@castomize.h1n.ru';
// укажите имя отправителя, например "Сайт DOMAIN.RU"
$mail->FromName = 'Сайт кастомизации';
// укажите тему сообщения здесь
$mail->Subject = 'ТЕМА ВАШЕГО СООБЩЕНИЯ';
// текст сообщения
$message = "Имя: {$_POST['name']}\r\n"; // добавляем имя в текст
$message .= "Телефон: {$_POST['phone']}"; // добавляем телефон в текст
$mail->Body = $message;
// кодировка, можете изменить на необходимую, но чаще всего используется UTF-8
$mail->CharSet = 'UTF-8';
//  укажите true вместо false, если хотите, чтобы сообщение обрабатывалось как HTML
$mail->isHTML(false);
// укажите почтовый адрес получателя
$mail->AddAddress('v44882266@mail.ru');
// укажите 4, если почта не отправляется, чтобы узнать, почему
$mail->SMTPDebug = 0;
// отправляем письмо
if($mail->send()){
echo 'Ваша заявка отправлена!';
}else{
echo 'Ошибка!';
}
