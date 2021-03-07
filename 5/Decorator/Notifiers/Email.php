<?php

namespace Decorator\Notifiers;

use Decorator\Interfaces\NotifierInterface;

//Здесь класс Email выступает как пример класса, реализующего интерфейс без использования декоратора

class Email implements NotifierInterface
{
    public function sendMessage(string $sendAddress, string $text)
    {

        echo "отправляем Email получателю $sendAddress с текстом $text";
    }
}