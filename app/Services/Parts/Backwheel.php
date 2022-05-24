<?php

namespace App\Services\Parts;

use App\Services\Interfaces\Base;
use App\Services\Traits\AddPart;

class BackWheel extends Frame implements Base{
    
    use AddPart;

    public $isFixed;

    public function add() {
        $this->addPart('back wheel'); 
    }
    
    public function isAssembled() {
        return $this->isFixed;
    }
}