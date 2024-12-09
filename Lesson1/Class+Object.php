<?php
class Car
{
    public $brand;
    public $color;

    public function drive()
    {
        echo "Driving $this->brand car" . PHP_EOL;
    }
}

echo '<pre>';

$myCar1 = new Car();
$myCar1->brand = "toyota";
$myCar1->color = "red";
$myCar1->drive();

$myCar2 = new Car();
$myCar2->brand = "toyota 2";
$myCar2->color = "blue";
$myCar2->drive();
