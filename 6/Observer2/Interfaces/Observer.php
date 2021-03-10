<?php


namespace Observer\Interfaces;

use Observer\Interfaces\Subject;

interface Observer  {

    public function update (Subject $subject);

}