<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay{

    public function __construct(array $currentVehicles)
    {
        parent::__construct(2, 50);
        $this->currentVehicles = $currentVehicles;
    }

    public function addVehicle(Vehicle $vehicle)
    {
            $this->setCurrentVehicles($vehicle);  
    }
    
}