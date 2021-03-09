<?php

namespace Decorator\Notifiers;

use Decorator\Decorator\Decorator;

class ChromeNotification extends Decorator
{
    public function sendMessage(string $sendAddress, string $text)
    {

        echo "отправляем Chrome уведомление получателю $sendAddress с текстом $text";
    }
}