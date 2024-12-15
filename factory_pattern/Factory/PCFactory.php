<?php

namespace App\Factory;

use App\Contracts\Computer;
use App\Contracts\ComputerFactory;
use App\Classes\PC;

// Concrete Factory: PC Factory-> produce PC objects with specific configurations
class PCFactory implements ComputerFactory
{
    private $RAM;
    private $HDD;
    private $CPU;
    
    public function __construct($RAM, $HDD, $CPU)
    {
        $this->RAM = $RAM;
        $this->HDD = $HDD;
        $this->CPU = $CPU;
    }
    
    public function createComputer(): Computer
    {
        return new PC($this->RAM, $this->HDD, $this->CPU);
    }
}