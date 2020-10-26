<?php
require_once 'vehicle.php';

class Car extends Vehicle{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private $energy;
    private $energyLevel;
    private $hasParkBrake; 
    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;

    }

    public function setParkBrake(bool $hasParkBrake): void
    {        
            if($hasParkBrake === true){
                throw new Exception("You can't go, your park brake is on ! ");
            }else
            {
                echo "I can go easily <br>";
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
    
} 
