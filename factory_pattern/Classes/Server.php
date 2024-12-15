<?php

namespace App\Classes;

use App\Contracts\Computer;

// Concrete Product: Server-> specific types of Computers that implement the getDescription method of Computer interface
class Server extends Computer
{
    public function getDescription(): string
    {
        return "Server Configuration: RAM = {$this->RAM}, HDD = {$this->HDD}, CPU = {$this->CPU}";
    }
}