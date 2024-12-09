<?php
final class BaseClassX 
{
    public function sayHello () {
        echo "Hello from BaseClass";
    }
}

// class ChildClass extends BaseClassX
class ChildClass
{
    // gây ra lỗi nếu cố gắng override phương thức sayHello
    public function sayHello() {
        echo "Hello from ChildClass";
    }
}