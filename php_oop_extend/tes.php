<?php

/**
 * Exercise extends
 * 
 * 1. Create Class Cycle
 * 2. Class have properties color and speed
 * 3. Class Cycle have method canRide
 * 4. Create another class ElectriCycle extenxd from Cycle
 * 5. ElectricCycle have a new method resourcePower
 * 6. Good Luck!
 */


class Cycle 
{
    public $color;
    public $speed;

    public function __construct($color,$speed)
    {
        $this->color = $color;
        $this->speed = $speed;
    }
    public function canRide()
    {
        echo "This Cycle can ride,This cycle have color ".$this->color." and have Sped ".$this->speed."km/hour ";
    }
}

class ElectricCycle extends Cycle
{
    public function resourcePower()
    {
        echo "This Cycle have batteries for power";
    }
}

$mini_scooter = new ElectricCycle("Red","2");
$mini_scooter->canRide();
$mini_scooter->resourcePower(); 