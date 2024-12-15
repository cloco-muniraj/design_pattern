<?php

// The prototype interface that defines the clone method
interface Prototype
{
    public function clone(): Prototype;
}

// The concrete class that implements the Prototype interface
class Car implements Prototype
{
    private string $model;
    private string $color;
    
    public function __construct(string $model, string $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    
    public function display(): void
    {
        echo "Car Model: {$this->model}, Color: {$this->color}\n";
    }
    
    public function clone(): Prototype 
    {
        return clone $this;
    }
}

// Client code that uses the prototype pattern and produces new objects by cloning the existing object
$car = new Car('BMW', 'Black');
$car->display();

$car2 = $car->clone();
$car2->setColor('Red');
$car2->display();
 
$car3 = $car->clone();
$car3->setColor('Blue');
$car3->display();