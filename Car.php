<?php

require_once 'Vehicle.php';
require_once 'Exception.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private Int $ernergyLevel;
    private Bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setenergy($energy);
        $this->hasParkBrake = $hasParkBrake;
    }

    public function setParkBrake(): bool
    {
        if ($hasParkBrake = true){
            $this->hasParkBrake = false;
        }else{
            $this->hasParkBrake = true;
        }

         $this->hasParkBrake = $hasParkBrake;
         return $hasParkBrake;
    }

    public function start(): string
    {
        if($this->hasParkBrake = true){
        throw new Exception ();
        }
        return "Start engin";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
        $this->energy = $energy;
        }
    return $this;
    }

    public function getErnergyLevel(): int
    {
        return $this->ernergyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}