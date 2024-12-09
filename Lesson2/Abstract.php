<?php 
abstract class Animal
{
    abstract public function makeSound();
    public function eat() {
        echo "nhoàm nhoàm ...";
    }
}

class Cat extends Animal 
{
    public function makeSound()
    {
        echo "xoạt xoạt hic";
    }
}

$cat = new Cat();
$cat->makeSound();