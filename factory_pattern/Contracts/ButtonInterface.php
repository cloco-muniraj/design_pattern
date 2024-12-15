<?php

namespace App\Contracts;

// Abstract Product Button: defines a base structure for all buttons with a ButtonInterface.
interface ButtonInterface
{
    public function render(): String;
}