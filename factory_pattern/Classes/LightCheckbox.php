<?php

namespace App\Classes;

use App\Contracts\CheckBoxInterface;

// Concrete Product: Light Checkbox
class LightCheckbox implements CheckBoxInterface
{
    public function render(): String
    {
        return "Rendering Light Checkbox";
    }
}