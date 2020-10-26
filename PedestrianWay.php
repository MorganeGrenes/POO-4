<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct(int $nbLane, int $maxSpeed, array $currentVehicles)
    {
        parent::__construct(1, 10);
        $this->currentVehicles = $currentVehicles;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof SkateBoard || $vehicle instanceof Bike){
            $this->setCurrentVehicles($vehicle);
        } else {
            echo 'This vehicle is not allowed on Pedestrianway';
        }
    }
}
