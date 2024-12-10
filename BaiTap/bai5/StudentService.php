<?php
class StudentService
{
    private $students;
    public function __construct(array $students = [])
    {
        $this->students = $students;
    }

    // đếm học sinh có điểm trung bình lớn hơn 7
    public function countGood()
    {
        $count = 0;
        foreach ($this->students as $student) {
            if($student->getAvg() > 7) {
                $count++;
            }      
        }
        return $count;
    }
    public function sortByAvg()
    {
        $n = count($this->students);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = $i+1; $j < $n; $j++) {
                if ($this->students[$i]->getAvg() < $this->students[$j]->getAvg()) {
                    $temp = $this->students[$i];
                    $this->students[$i] = $this->students[$j];
                    $this->students[$j] = $temp;
                }
            }
        }

        return $this->students;
    }

    public function getSortedStudents()
    {
        return $this->students;
    }
}
