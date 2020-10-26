<?php
require_once 'vehicle.php';

abstract class HighWay{
    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->nbSeats = $maxSpeed;
    }


    abstract function addVehicle(Vehicle $vehicle);
    
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles[]= $currentVehicles;

    }
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    } 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}