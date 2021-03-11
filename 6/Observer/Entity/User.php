<?php


namespace Observer\Entity;

use SplSubject;

class User implements \SplObserver
{
    public $name;
    public $email;
    public $exp;

    public function __construct(string $name, string $email, int $exp)
    {
        $this->name = $name;
        $this->email = $email;
        $this->exp = $exp;
    }

    public function update(SplSubject $subject)
    {
        echo "Отправляем на email $this->email уведомление";
    }
}