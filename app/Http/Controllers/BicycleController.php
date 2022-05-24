<?php

namespace App\Http\Controllers;

use App\Services\Parts\FrontWheel;
use App\Services\Parts\HandleBar;
use App\Services\Parts\Backwheel;
use App\Services\Parts\Frame;
use App\Services\Parts\Gear;

use Illuminate\Http\Request;

class BicycleController extends Controller
{
    private $frontWheel;
    private $handlebar;
    private $backWheel;
    private $frame;
    private $gear;

    public function __construct(
        FrontWheel $frontWheel, 
        HandleBar $handlebar, 
        Backwheel $backWheel, 
        Frame $frame, 
        Gear $gear) {
            $this->frontWheel = $frontWheel;
            $this->handlebar = $handlebar;
            $this->backWheel = $backWheel;
            $this->frame = $frame;
            $this->gear = $gear;
        }
    
    public function makeBike() {
        $this->frame->add();
        $this->frontWheel->add();
        $this->backWheel->add();
        $this->handlebar->add();
        $this->gear->add();
        
        try {
            if($this->frame->isAssembled()
                && $this->frontWheel->isAssembled() 
                && $this->backWheel->isAssembled() 
                && $this->handlebar->isAssembled() 
                && $this->gear->isAssembled()) {
                    echo('Your bicycle has been assembled, some features have not been considered at this time');
                }
        } catch (\Throwable $th) {
            print('Well that did not go as expected'. $th->getmessage());
        }

        // dd('finished');
    }
}
