<?php

namespace Decorator\Notifiers;

use Decorator\Decorator\Decorator;
use Decorator\Interfaces\NotifierInterface;

class Email  extends Decorator
{
    public function __construct(NotifierInterface $NotifierInterface, string $receiverId, string $messageText)
    {
        $this->NotifierInterface = $NotifierInterface;
        $this->receiverId = $receiverId;
        $this->messageText = $messageText;
        echo "отправляем Email получателю $this->receiverId с текстом $this->messageText";
    }
}