<?php 
interface ConVat
{
    public function makeSound();
}

interface Movable
{
    public function move();
}

class Cow implements ConVat, Movable
{
    public function makeSound()
    {
        echo "Back barki";
    }

    public function move()
    {
        echo "walking ...";
    }
}

$cow = new Cow();

$cow->makeSound();
$cow->move();