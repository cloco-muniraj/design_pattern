<?php

require '../vendor/autoload.php';

use App\Contracts\ComputerFactory;
use App\Factory\PCFactory;
use App\Factory\ServerFactory;
use App\Factory\DarkThemeFactory;
use App\Factory\LightThemeFactory;
use App\Contracts\GUIFactory;


function getComputerDetails(ComputerFactory  $computerFactory) // client code that uses the factory to create a computer object and retrieve its description without knowing/tied the/to concrete class( a specific implementation )
{
    $computer = $computerFactory->createComputer();
    echo $computer->getDescription() . PHP_EOL;
}


// Create a PC
echo "Creating a PC:" . PHP_EOL;
$pcFactory = new PCFactory("16GB", "1TB", "2.9GHz");
getComputerDetails($pcFactory);

// Create a Server
echo "Creating a Server:" . PHP_EOL;
$serverFactory = new ServerFactory("32GB", "4TB", "3.5GHz");
getComputerDetails($serverFactory);


function renderUi(GUIFactory $GUIFactory)
{
    $button = $GUIFactory->createButton();
    $checkbox = $GUIFactory->createCheckbox();
    
    echo $button->render() . PHP_EOL;
    echo $checkbox->render() . PHP_EOL;
}

// Using the Dark Theme Factory
echo "Using Dark Theme Factory:" . PHP_EOL;
$darkFactory = new DarkThemeFactory();
renderUI($darkFactory);

// Using the Light Theme Factory
echo "Using Light Theme Factory:" . PHP_EOL;
$lightFactory = new LightThemeFactory();
renderUI($lightFactory);
