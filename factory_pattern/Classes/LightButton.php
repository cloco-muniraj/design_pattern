<?php

namespace App\Classes;

use App\Contracts\ButtonInterface;

// Concrete Product: Light Button
class LightButton implements ButtonInterface
{
    public function render(): String
    {
        return "Rendering Light Button";
    }
}