<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTest extends TestCase
{

    public function testCarModel()
    {
        $car = Car::find(10);
        $car_model =  $car->Model;
        $this->assertInternalType('string', $car_model);
    }
}
