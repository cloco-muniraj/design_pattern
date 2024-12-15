<?php

namespace App\Contracts;

// Abstract Product CheckBox: defines a base structure for all checkboxes with a CheckBoxInterface.

interface CheckBoxInterface
{
    public function render(): String;
}