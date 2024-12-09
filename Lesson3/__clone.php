<?php 
class MyClass 
{
    public function __construct(public $name){}

    public function __clone() 
    {
        echo "Object cloned . Original name : " . $this->name . "<br>";
    }
}

echo "<pre>";

$object = new MyClass('THái Bảo');
$object2 = clone $object;

print_r($object);
print_r($object2);