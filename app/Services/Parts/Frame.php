<?php

namespace App\Services\Parts;

use App\Services\Interfaces\Base;

class Frame implements Base{
    
    public $isFixed;
    
    public function __construct() {
        $this->isFixed = true;
    }

    public function isAssembled() {
        return $this->isFixed;
    }

    public function add() {
        $this->isFixed = true;
        echo('Frame was added <br>');
    }
}