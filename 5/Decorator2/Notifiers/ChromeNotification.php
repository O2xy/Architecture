<?php

namespace Decorator\Notifiers;

use Decorator\Decorator\Decorator;
use Decorator\Interfaces\NotifierInterface;

class ChromeNotification  extends Decorator
{
    public function __construct(NotifierInterface $NotifierInterface, string $receiverId, string $messageText)
    {
        $this->NotifierInterface = $NotifierInterface;
        $this->receiverId = $receiverId;
        $this->messageText = $messageText;
        echo "отправляем Chrome уведомление получателю $this->receiverId с текстом $this->messageText";
    }
}