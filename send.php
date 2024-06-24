<?php

$project = $_POST['radio'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$textarea = $_POST['textarea'];

$mess = "Проект: ".$project."\r\nИмя: ".$name."\r\nПочта: ".$email."\r\nТелефон: ".$tel."\r\nСообщение: ".$textarea;

$headers = array(
  'From' => 'anorcclever@yandex.ru',
  'X-Mailer' => 'PHP/' . phpversion()
);

$mail = mail('anorcclever@yandex.ru', 'Заявка с Clever', $mess, $headers);
// Отправляем
if ($mail) {
  require('thanks/index.php');
} 

else {
  require('error/index.php');
}

?>