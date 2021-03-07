<?php


namespace Decorator\Decorator;

use Decorator\Interfaces\NotifierInterface;

class Decorator implements NotifierInterface
{
//
//    protected $NotifierInterface;
//
//    public function __construct(NotifierInterface $NotifierInterface)
//    {
//        $this->NotifierInterface = $NotifierInterface;
//    }

    public function sendMessage(string $sendAddress, string $text)
    {
//        return $this->NotifierInterface->sendMessage($sendAddress, $text);
    }

}




