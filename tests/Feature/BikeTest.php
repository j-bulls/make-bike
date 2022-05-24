<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BikeTest extends TestCase
{
    public function bicycle_can_be_created() {
        $response = $this->get('/bicycles');
    }
}
