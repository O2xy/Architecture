<?php

use \Decorator\Notifiers\SMS;
use \Decorator\Notifiers\Email;
use \Decorator\Notifiers\ChromeNotification;
use \Decorator\Notifiers\NoNotification;

$sendNo = new NoNotification();
$sendSMS = new SMS($sendNo, '1', 'Всё хорошо'); //создаём объект, отправляющий СМС
$sendSMSEmail = new Email($sendSMS, $sendSMS->receiverId, $sendSMS->messageText); // создаём объект, отправляющий СМС и Email
$sendSMSCN = new ChromeNotification($sendSMS, $sendSMS->receiverId, $sendSMS->messageText); // Создаём объект, отправляющий СМС и Chrome notification





