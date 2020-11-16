<?php
class ChargingStation
{
    public function fullcharge(RechargeableInterface $vehicle)
    {
        $vehicle->charge(100);
    }
}