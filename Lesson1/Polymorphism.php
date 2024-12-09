<?php

class Animal 
{
    public function sound() {
        echo "Animal sound";
    }
}

class Cat extends Animal
{
    public function sound(){
        echo "meo meo" . "<br>";
    }
    
    public function makeSound()
    {
        echo "Back barki" . PHP_EOL;
    }

    public function move()
    {
        echo "walking ...". PHP_EOL;
    }
}

class Dog extends Animal
{
    public function sound(){
        echo "gaau gaau" . "<br>";
    }
    
    public function makeSound()
    {
        echo "Back barki" . PHP_EOL;
    }

    public function move()
    {
        echo "walking ...". PHP_EOL;
    }
}

$cat = new Cat();
$cat->sound();

$dog = new Dog();
$dog->sound();