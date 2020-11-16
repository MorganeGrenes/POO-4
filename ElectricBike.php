<?php
class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function charge(int $percentage): int
    {
        return '';
    }
    public function unLoad(int $percentage): int
    {
        return '';
    }
    public function changeWheel()
    {
        
    }
}