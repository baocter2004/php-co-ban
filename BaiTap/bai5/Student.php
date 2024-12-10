<?php
function debug($params)
{
    echo "<pre>";
    print_r($params);
    die;
}

class Student
{
    private $avg;
    public function __construct(
        private $name,
        private $age,
        private $math,
        private $physic,
        private $chemitry
    ) {
        $this->avg = $this->calculateAvg();
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getMath()
    {
        return $this->math;
    }
    public function setMath($math) {
        $this->math = $math;
    }

    public function getPhysic($physic) {    
        $this->physic = $physic;
    }

    public function getChemitry()
    {
        return $this->chemitry;
    }

    public function setChemitry($chemitry)
    {
        $this->chemitry = $chemitry;
    }

    public function getAvg()
    {
        return $this->avg;
    }

    private function calculateAvg()
    {
        return ($this->math + $this->physic + $this->chemitry) / 3;
    }
}
