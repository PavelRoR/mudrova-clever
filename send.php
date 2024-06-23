<?php
	
// Подключаем библиотеку PHPMailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';



// Создаем письмо
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'utf-8';

$project = $_POST['radio'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$textarea = $_POST['textarea'];


$mail->isSMTP();                   // Отправка через SMTP
$mail->Host   = 'mail.hosting.reg.ru';  // Адрес SMTP сервера
$mail->SMTPAuth   = true;          // Enable SMTP authentication
$mail->Username   = 'tmp@mastervision.su';       // ваше имя пользователя (без домена и @)
$mail->Password   = 'wS9kV2mJ6mkX9qE8';    // ваш пароль
$mail->SMTPSecure = 'ssl';         // шифрование ssl
$mail->Port   = 465;               // порт подключения
 
$mail->setFrom('tmp@mastervision.su', 'Clever');    // от кого
$mail->addAddress('tmp@mastervision.su', 'Вася Петров'); // кому
 
$mail->Subject = 'Заявка с Clever';
$mail->isHTML(true);
$mail->Body = 'Проект: '.$project.'<br>Имя: '.$name.'<br>Почта: '.$email.'<br>Телефон: '.$tel.'<br>Сообщение: '.$textarea;

// Отправляем
if ($mail->send()) {
  require('thanks/index.php');
} 

else {
  require('error/index.php');
}

?>