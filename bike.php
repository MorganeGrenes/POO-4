<?php
require_once 'vehicle.php';

class Bike extends Vehicle{
    public function __construct($color, $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }
    public function changeWheel()
    {

    }
}