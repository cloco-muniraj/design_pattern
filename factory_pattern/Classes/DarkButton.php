<?php

namespace App\Classes;

use App\Contracts\ButtonInterface;

// Concrete Product: Dark Button
class DarkButton implements ButtonInterface
{
    public function render(): String
    {
        return "Rendering Dark Button";
    }
}