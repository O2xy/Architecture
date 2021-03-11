<?php


namespace Observer\Interfaces;

use Observer\Interfaces\Observer;


interface Subject  {

    public function attach (Observer $observer);

    public function detach (Observer $observer);

    public function notify ();

}