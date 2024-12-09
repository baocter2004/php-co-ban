<?php
class Car {
    public $brands = "toyota";

    public function showBrand() {
        echo $this->brands;
    }
}

class Mec extends Car 
{
    public function abc() {
        $this->brands;
    }
}

$car = new Car();

echo $car->brands;