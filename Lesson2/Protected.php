<?php 
class Vehicle 
{
    protected $brand = "toyota";

    protected function showBrand() 
    {
        echo $this->brand;
    }
}

class Car extends Vehicle
{
    public function display() 
    {
        $this->showBrand();
    }
}

$car = new Car();

$car->display();

// echo $car->brand; ( lỗi vi phạm phạm vi truy cập)