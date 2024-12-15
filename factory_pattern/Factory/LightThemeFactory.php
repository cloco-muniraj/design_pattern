<?php

namespace App\Factory;

use App\Classes\LightButton;
use App\Classes\LightCheckbox;
use App\Contracts\GUIFactory;
use App\Contracts\ButtonInterface;
use App\Contracts\CheckBoxInterface;

// Concrete Factory: Light Theme Factory

class LightThemeFactory implements GUIFactory
{
    public function createButton(): ButtonInterface
    {
        return new LightButton();
    }

    public function createCheckbox(): CheckBoxInterface
    {
        return new LightCheckbox();
    }
}