<?php

class Car{
    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel = 100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbseats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
    $this->currentSpeed += 10;
    $this->energyLevel --;
    return "Speed up";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
       $this->currentSpeed -= 5;
       $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

        public function start(): string
    {
        $this->curentSpeed = 10;
        return "Go!";
    }

        public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
        public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    
        public function setEnergyLevel(int $energyLevel): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }
    
        public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }
    
        public function setNbWheels(string $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }
    
        public function setNbSeats(string $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    
        public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
}