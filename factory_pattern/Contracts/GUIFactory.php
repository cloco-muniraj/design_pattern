<?php

namespace App\Contracts;
use App\Contracts\ButtonInterface;
use App\Contracts\CheckBoxInterface;

// Abstract Factory: defines a method for creating a Button and a CheckBox
interface GUIFactory
{
    public function createButton(): ButtonInterface;
    public function createCheckbox(): CheckBoxInterface;
}