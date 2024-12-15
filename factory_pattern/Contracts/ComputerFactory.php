<?php

namespace App\Contracts;

// Abstract Factory: Computer Factory -> declares a method for creating a Computer object

interface ComputerFactory
{
    public function createComputer(): Computer;
}