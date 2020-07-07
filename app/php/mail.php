<?php

$name = $_POST['name'];

$email = $_POST['mail'];

$phone = $_POST['phoneon'];

$bezspama = htmlspecialchars($_POST["phone"]);

$mes = "Запрос на звонок с сайта пласт-декор.рф.\n
Имя отправителя: $name
Электронный адрес отправителя: $email
Номер отправителя: $phone";

if (empty($bezspama))
{

$from  = "Content-type:text/plain; charset = UTF-8\r\nFrom:olegkvkv@mail.ru";
if (mail('klochkovod@yandex.ru','Запрос на звонок с сайта пласт-декор.рф', $mes, $from)) {
    header('Refresh: 0; URL=http://plast-decor.mcdir.ru/message.html');
    }
else {
    header('Refresh: 0; URL=http://plast-decor.mcdir.ru/messageerror.html');
    }
}
exit;

?>
