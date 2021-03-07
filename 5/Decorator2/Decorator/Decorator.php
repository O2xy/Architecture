<?php


namespace Decorator\Decorator;

use Decorator\Interfaces\NotifierInterface;

class Decorator implements NotifierInterface
{

    protected $NotifierInterface;
    public string $receiverId;
    public string $messageText;

    public function __construct(NotifierInterface $NotifierInterface, string $receiverId, string $messageText)
    {
        $this->NotifierInterface = $NotifierInterface;
        $this->receiverId = $receiverId;
        $this->messageText = $messageText;
    }

}




