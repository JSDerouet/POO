<?php

class Car extends Vehicule {

    private string $energy;

    public function __construct(string $energy)
    {
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

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
}