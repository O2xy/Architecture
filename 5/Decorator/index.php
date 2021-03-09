<?php

use \Decorator\Notifiers\SMS;
use \Decorator\Notifiers\Email;

$sendSMS = new SMS();
$sendSMS->sendMessage('+79876543210', 'Всё хорошо');

$sendEmail = new Email();
$sendEmail->sendMessage('example@example.com', 'Всё отлично');
