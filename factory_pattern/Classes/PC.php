<?php

namespace App\Classes;

use App\Contracts\Computer;

// Concrete Product: PC-> specific types of Computers that implement the getDescription method of Computer interface
class PC extends Computer
{
    public function getDescription(): String 
    {
        return "PC Configuration: RAM = {$this->RAM}, HDD = {$this->HDD}, CPU = {$this->CPU}";
    }
}