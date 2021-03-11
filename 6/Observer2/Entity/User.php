<?php


namespace Observer\Entity;

use Observer\Interfaces\Subject;

class User implements Observer\Interfaces\Observer
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

    public function update(Subject $subject)
    {
        echo "Отправляем на email $this->email уведомление";
    }
}