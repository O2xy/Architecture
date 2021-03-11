<?php


namespace Observer\Subject;

use \Observer\Interfaces\Subject;
use \Observer\Interfaces\Observer;

class HandHuntergb implements Subject
{
    /**
     * @var \Observer\Entity\ObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new \Observer\Entity\ObjectStorage();
    }

    /**
     * Методы управления подпиской.
     *  * @var \Observer\Interfaces\Observer
     */
    public function attach(Observer $observer): void
    {
        echo "Subject: Attached an observer.\n";
        $this->observers->attach($observer);
    }

    public function detach(Observer $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.\n";
    }

    /**
     * Запуск обновления в каждом подписчике.
     */
    public function notify(): void
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function publishVacancy(): void
    {
        echo "Публикуем вакансию";
        $this->notify();
    }
}