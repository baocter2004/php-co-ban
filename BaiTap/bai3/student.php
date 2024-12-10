<?php
function debug($params)
{
    echo "<pre>";
    var_dump($params);
    die;
}

function writeStudentInfo($fileName, $name, $age)
{
    if ($fileName) {
        $file = fopen($fileName, 'a');
        if ($file) {
            $data = $name . " | " . $age . PHP_EOL;
            fwrite($file, $data);
            fclose($file);
        } else {
            echo "Không Mở Được File";
        }
    } else {
        echo "File Name không hợp lệ";
    }
}

function readStudentInfo($fileName)
{
    $students = [];

    if ($fileName) {
        $file = fopen($fileName, 'r');
        if ($file) {
            while (($student = fgets($file)) !== false) {
                $students[] = trim($student);

                print_r($student);
            }
            fclose($file);

            $studentArr = [];
            for ($i = 0; $i < sizeof($students); $i++) {
                $studentData = explode(' | ', $students[$i]);
                $studentArr[] = [
                    'name' => $studentData[0],
                    'age' => $studentData[1]
                ];
            }
            return $studentArr;
        } else {
            echo "Không Mở Được File";
        }
    } else {
        echo "File Name không hợp lệ";
    }
}

// $fileName = 'students.txt';
// writeStudentInfo($fileName, 'bao', 19);
// writeStudentInfo($fileName, 'kim chung', 19);

// $text = readStudentInfo($fileName);
// debug($text); 
