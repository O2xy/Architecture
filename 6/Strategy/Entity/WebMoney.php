<?php


namespace Strategy\Entity;

use \Strategy\Interfaces\Strategy;

class WebMoney  implements Strategy
{
    public function doAlgorithm(): string
    {
        return 'Осуществляем платёж через WebMoney';
    }
}