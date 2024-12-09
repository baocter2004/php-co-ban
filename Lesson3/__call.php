<?php
class MyClass
{
    public function __call($name, $args){
        echo "Method '$name' called with arguments : " . implode('. ', $args) . "<br>";
    }
}

$object = new MyClass();
$object->nonExistentMethod('arg1','arg2');