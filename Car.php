<?php
require_once 'vehicle.php';
require 'LightableInterface';

class Car extends Vehicle implements LightableInterface{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private $energy;
    private $energyLevel; 
    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;

    }

    public function setParkBrake(): void
    {        
            if($this->hasParkBrake == true){
                $this->hasParkBrake = false;
            }
    }
    public function getParkBrake()
    {

    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel():string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function changeWheel(){
        return "";
    }
    public function switchOn(){
        return true;
    }
    public function switchOff()
    {
        return false;
    }
    
} 
