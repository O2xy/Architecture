<?php

use Strategy\Entity\Qiwi;
use Strategy\Entity\WebMoney;
use Strategy\Entity\YouMoney;
use Strategy\Strategy\Context;

$context = new Context(new Qiwi());
$context->doStrategy();
$context->setStrategy(new WebMoney());
$context->doStrategy();

$context2 = new Context(new YouMoney());
$context2->doStrategy();
