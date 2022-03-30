<?php

class Vehicule

{
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;
    protected int $energyLevel = 100;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
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
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    
        public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0) {
            $this->currentSpeed = $energyLevel;
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

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}