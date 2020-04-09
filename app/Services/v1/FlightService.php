<?php

namespace App\Services\v1;


use App\Flight;

class FlightService{
    public function getFlight()
    {
        return Flight::all();
    }
}
