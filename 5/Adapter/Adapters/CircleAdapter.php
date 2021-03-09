<?php


namespace Adapter\Adapters;


use Adapter\Interfaces\ICircle;
use Adapter\AreaLibs\CircleAreaLib;

class CircleAdapter implements ICircle
{
    private CircleAreaLib  $CircleAreaLib;
    public float $area;

    public function circleArea(int $circumference)
    {
        $this->area = $this->CircleAreaLib->getCircleArea(round($circumference/M_PI));
    }
}