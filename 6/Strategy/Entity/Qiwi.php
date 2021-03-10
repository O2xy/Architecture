<?php


namespace Strategy\Entity;

use \Strategy\Interfaces\Strategy;

class Qiwi  implements Strategy
{
    public function doAlgorithm(): string
    {
       return 'Осуществляем платёж через Qiwi';
    }
}