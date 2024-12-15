<?php

namespace App\Factory;

use App\Classes\Server;
use App\Contracts\Computer;
use App\Contracts\ComputerFactory;

// Concrete Factory: Server Factory-> produce server objects with specific configurations
class ServerFactory implements ComputerFactory
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
        return new Server($this->RAM, $this->HDD, $this->CPU);
    }
}