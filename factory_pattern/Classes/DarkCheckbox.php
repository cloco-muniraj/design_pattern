<?php

namespace App\Classes;

use App\Contracts\CheckBoxInterface;

// Concrete Product: Dark Checkbox
class DarkCheckbox implements CheckBoxInterface
{
    public function render(): String
    {
        return "Rendering Dark Checkbox";
    }
}