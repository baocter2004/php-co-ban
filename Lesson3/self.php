<?php
class MyClass 
{
    public static $name = "Myclass";

    public static function getName() {
        return self::$name;
    }

}
echo MyClass::getName();