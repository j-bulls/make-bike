<?php

namespace App\Services\Parts;

use App\Services\Interfaces\Base;
use App\Services\Traits\AddPart;

class FrontWheel extends Frame implements Base{

    use AddPart;

    public $isFixed;

    public function add() {
        $this->addPart('front wheel');
    }

    public function isAssembled() {
        return $this->isFixed;
    }
}