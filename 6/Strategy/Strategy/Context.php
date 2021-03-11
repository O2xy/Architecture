<?php


namespace Strategy\Strategy;

use Strategy\Interfaces\Strategy;

class Context
{
    /**
     * @var Strategy
     */
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doStrategy(): void
    {
        echo $this->strategy->doAlgorithm();
    }
}