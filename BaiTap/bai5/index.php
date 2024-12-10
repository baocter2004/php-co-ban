<?php
require_once "./Student.php";
require_once "./StudentService.php";

$student = new Student('Bảo',19,10,10,9);
$student2 = new Student('oyiii',30,1,9,9);
$student3 = new Student('oop',20,6,9,9);
$student4 = new Student('ppo',10,3,9,9);
$student5 = new Student('reo',20,9,9,9);
$student6 = new Student('rkkkkkkro',130,1,7,9);

$arr = [$student,$student2,$student3,$student4,$student5,$student6];

$service = new StudentService($arr);

echo "số Học Sinh Đạt điểm trung bình trên 7 là : " . $service->countGood() . "<br>";

echo "<pre>";

debug($service->sortByAvg());