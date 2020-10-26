<?php
require_once 'vehicle.php';
class Truck extends Vehicle{
    private $maxStorage;
    private $storage = 0;

    public function __construct(int $maxStorage, $color, $nbSeats, $energy){
        parent::__construct($color, $nbSeats);
        $this->maxStorage = $maxStorage;
    }
    public function isFull(): string
    {
        if($this->storage < $this->maxStorage){
            return 'in filling';
        }else
        {
            return 'full';
        }
    }

    public function getMaxStorage(){
        return $this->maxStorage;
    }

    public function getStorage(){
        return $this->storage;
    }

    public function setMaxStorage($maxStorage){
        $this->maxStorage = $maxStorage;

    }
    public function setStorage($storage){
        $this->storage = $storage;
    }

    public function changeWheel(){
        return "";
    }
}