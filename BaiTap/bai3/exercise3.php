<?php 
require "./student.php";

$fileName = 'instructors.txt';
writeStudentInfo($fileName, 'bao', 19);
writeStudentInfo($fileName, 'kim chung', 19);

$text = readStudentInfo($fileName);
debug($text); 
