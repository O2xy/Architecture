<?php


namespace Adapter\Adapters;


use Adapter\Interfaces\ISquare;
use Adapter\AreaLibs\SquareAreaLib;

class SquareAdapter implements ISquare
{
    private SquareAreaLib  $SquareAreaLib;
    public float $area;

    public function squareArea(int $sideSquare)
    {
        $this->area = $this->SquareAreaLib->getSquareArea(round($sideSquare * M_SQRT2));
    }
}