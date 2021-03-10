<?php


namespace Strategy\Entity;

use \Strategy\Interfaces\Strategy;

class YouMoney  implements Strategy
{
    public function doAlgorithm(): string
    {
        return 'Яндекс.деньги переименовались. Осуществляем платёж через YouMoney';
    }
}