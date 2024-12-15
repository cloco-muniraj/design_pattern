<?php

// The product Class
class Car {
    private $engine;
    private $seats;
    private $color;

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function setSeats($seats) {
        $this->seats = $seats;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function showSpecifications() {
        echo "Car Specifications:\n";
        echo "Engine: " . $this->engine . "\n";
        echo "Seats: " . $this->seats . "\n";
        echo "Color: " . $this->color . "\n";
    }
}

// The builder interface
interface CarBuilder {
    public function setEngine($engine);
    public function setSeats($seats);
    public function setColor($color);
    public function getCar(): Car;
}

// The concrete builder class
class SportsCarBuilder implements CarBuilder {
    private $car;

    public function __construct() {
        $this->car = new Car();
    }

    public function setEngine($engine) {
        $this->car->setEngine($engine);
    }

    public function setSeats($seats) {
        $this->car->setSeats($seats);
    }

    public function setColor($color) {
        $this->car->setColor($color);
    }

    public function getCar(): Car {
        return $this->car;
    }
}

// The director class
class CarDirector
{
    private $builder;
    
    public function __construct(CarBuilder $builder)
    {
        $this->builder = $builder;
    }
    
    public function buildSportsCar(): Car
    {
        $this->builder->setEngine('V8');
        $this->builder->setSeats(2);
        $this->builder->setColor('Red');
        return $this->builder->getCar();
    }
}

$builder = new SportsCarBuilder();
$director = new CarDirector($builder);
$sportsCar = $director->buildSportsCar();
$sportsCar->showSpecifications();


print_r($sportsCar);