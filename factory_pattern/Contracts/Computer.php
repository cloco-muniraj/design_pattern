<?php

namespace App\Contracts;

// Abstract Product Computer: defines a base structure for all computers with RAM, HDD and CPU attributes and a getDescription method.
abstract class Computer 
{
    protected $RAM;
    protected $HDD;
    protected $CPU;
    
    public function __construct($RAM, $HDD, $CPU)
    {
        $this->RAM = $RAM;
        $this->HDD = $HDD;
        $this->CPU = $CPU;        
    }
    
    abstract public function getDescription(): String;
}