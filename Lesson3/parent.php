<?php 
class BaseClass
{
    public function sayHello () {
        echo "hello form baseclass!";
    }
}

class ChildClass extends BaseClass
{
    public function sayHello()
    {
        parent::sayHello();

        echo " and hello from childclass";
    }
}

$child = new ChildClass();
$child->sayHello();