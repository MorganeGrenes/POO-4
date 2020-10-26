<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay{

    

    public function __construct(array $currentVehicles)
    {
        parent::__construct(4, 130);
        $this->currentVehicles = $currentVehicles;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car){
            $this->setCurrentVehicles($vehicle);
        }else
        {
            echo 'This vehicle is not allowed on Highway';
        }
    }
}