<?php

namespace Decorator\Notifiers;

use Decorator\Decorator\Decorator;
use Decorator\Interfaces\NotifierInterface;

class SMS  extends Decorator
{
    public function __construct(NotifierInterface $NotifierInterface, string $receiverId, string $messageText)
    {
        $this->NotifierInterface = $NotifierInterface;
        $this->receiverId = $receiverId;
        $this->messageText = $messageText;
        echo "отправляем SMS получателю $this->receiverId с текстом $this->messageText";
    }
}