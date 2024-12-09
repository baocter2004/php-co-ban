<?php 
abstract class Shape {
    abstract protected function getArea();
}

class Circle extends Shape
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius . "<br>";
    }
}

class Rectangle extends Shape
{
    private $dai;
    private $rong;

    public function __construct($dai,$rong)
    {
        $this->dai = $dai;
        $this->rong = $rong;
    }

    public function getArea() {
        return $this->dai * $this->rong . "<br>";
    }
}

$rectangle = new Rectangle(5,2);

echo "diện tích hình chữ nhật : " . $rectangle->getArea();

$circle = new Circle(3);

echo $circle->getArea();