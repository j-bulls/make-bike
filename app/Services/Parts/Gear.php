<?php

namespace App\Services\Parts;

use App\Services\Interfaces\Base;
use App\Services\Traits\AddPart;

class Gear extends Backwheel implements Base{
    
    use AddPart;

    public $isFixed;
  
    public function add() {
        $this->addPart('gear system');
    }

    public function isAssembled() {
        return $this->isFixed;
    }
}