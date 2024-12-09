<?php
class MyClass
{
    private $name;
    public function __construct()
    {
        echo "Object created" . "<br>";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . "<br>";
    }

    public function __destruct()
    {
        echo "Object destroyed";
    }
}

$object = new MyClass();
$object->setName('bảo');
echo $object->getName();
