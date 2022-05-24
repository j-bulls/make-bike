<?php

namespace App\Services\Parts;

use App\Services\Interfaces\Base;
use App\Services\Traits\AddPart;

class HandleBar extends FrontWheel implements Base{
    
    use AddPart;

    public $isFixed;

    public function add() {
        $this->addPart('Handle Bar');
    }

    public function isAssembled() {
        return $this->isFixed;
    }
}