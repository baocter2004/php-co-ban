<?php

class Vehicle
{
    public $brand;
    public function honk()
    {
        echo "honking" . '<br>';
    }
}

class Car extends Vehicle
{
    public $model;

    public function drive()
    {
        echo "Driving " . $this->brand . " " . $this->model . "<br>";
    }
}

class Motobike extends Vehicle
{
    public $seri;
    public function drive()
    {
        echo "Driving " . $this->brand . " " . $this->seri . "<br>";
    }
}

function debug($error)
{
    echo '<pre>';

    print_r($error);

    die;
}

$myCar1 = new Car();
$myCar1->model = "dkdkd";
$myCar1->brand = "toyota";
$myCar1->honk();
$myCar1->drive();


$myMoto = new Motobike();
$myMoto->seri = "dkdkde493";
$myMoto->brand = "honda";
$myMoto->drive();
$myMoto->honk();


// debug($myCar1);