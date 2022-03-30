<?php
require_once 'vehicule.php';

class Truck extends Vehicule {
    private int $stockage;
    private int $charge = 0;
    private string $energy;

    public function __construct(int $stockage, string $energy){
        $this->stockage = $stockage;
        $this->energy = $energy;
    }

    public function full(): boolean{
        if ($charge < $stockage){
            return 'in filling';
        } elseif ($charge = $stockage){
            return 'full';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    
        public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getCharge(): string
    {
        return $this->charge;
    }
}