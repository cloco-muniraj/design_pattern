<?php

namespace App\Factory;

use App\Contracts\GUIFactory;
use App\Contracts\ButtonInterface;
use App\Contracts\CheckBoxInterface;
use App\Classes\DarkButton;
use App\Classes\DarkCheckbox;

// Concrete Factory: Dark Theme Factory

class DarkThemeFactory implements GUIFactory
{
    public function createButton(): ButtonInterface
    {
        return new DarkButton();
    }

    public function createCheckbox(): CheckBoxInterface
    {
        return new DarkCheckbox();
    }
}