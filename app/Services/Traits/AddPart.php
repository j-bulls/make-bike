<?php

namespace App\Services\Traits;

trait AddPart {
    public function addPart(String $part) {
        if($this->isAssembled()) {
            $this->isFixed = true;
            echo('This '.$part.' has been successfully assembled<br>');
        }
    }
}