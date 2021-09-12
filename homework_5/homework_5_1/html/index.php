<?php

require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
  ->setUsername('elikrizevskigmail.com@mail.ru')
  ->setPassword('fKzfybRW0Zsdc73BEQUU');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['elikrizevskigmail.com@mail.ru' => 'John Doe'])
  ->setTo(['zoofoo.online@gmail.com'])
  ->setBody('Here is the message itself');

// Send the message
$result = $mailer->send($message);
var_dump($result);
