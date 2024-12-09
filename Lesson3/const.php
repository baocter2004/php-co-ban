<?php 
class MyClass
{
    const PI = 3.14159453453;
    public function getPi()
    {
        return self::PI;
    }
}

MyClass::PI;
$myClass = new MyClass("hhh");

echo $myClass->getPi();