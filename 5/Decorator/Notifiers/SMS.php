<?php

namespace Decorator\Notifiers;

use Decorator\Decorator\Decorator;

class SMS  extends Decorator
{
    public function sendMessage(string $sendAddress, string $text)
    {

        echo "отправляем SMS получателю $sendAddress с текстом $text";
    }
}