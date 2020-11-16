<?php
require_once 'vehicle.php';

class Bike extends Vehicle implements LightableInterface{
    public function __construct($color, $nbSeats, $currentSpeed)
    {
        parent::__construct($color, $nbSeats);
    }
    public function changeWheel()
    {

    }
    public function switchOn(): bool
    {
        if($this->currentSpeed > 10){
            return true;
        }
    }
    public function switchOff(): bool
    {
        return false;
    }
}