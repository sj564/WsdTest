<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;



class CarYearTest extends TestCase
{

    public function testCarYear()

    {


        $car = Car::find(40);
        $car_year = (int) $car->year;
        $this->assertInternalType('integer', $car_year);


    }
}
