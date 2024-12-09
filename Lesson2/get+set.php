<?php
class Person 
{
    private $name;
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$peron = new Person();

$peron->setName('bảo bảo');
echo $peron->getName();