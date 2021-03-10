<?php

use \Observer\Subject\HandHuntergb;
use \Observer\Entity\User;

$subject = new HandHuntergb();

$user1 = new User('Иван Иванов', 'ivanov@example.com', 5);
$subject->attach($user1);
$subject->publishVacancy();

$user2 = new User('Пётр Петров', 'petrov@example.com', 12);
$subject->attach($user2);
$subject->publishVacancy();

$subject->detach($user1);
$subject->publishVacancy();
