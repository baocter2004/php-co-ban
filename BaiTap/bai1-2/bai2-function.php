<?php

// Tạo file functions.php chứa các hàm thực hiện công việc: tính tổng các phần tử trong mảng, tìm số lớn nhất trong mảng, tìm số nhỏ nhất trong mảng
//  Tạo file exercise2.php, thực hiện require file functions.php và triệu gọi các hàm trên

$array = [1,7,4,8,1,9,2,12];

function tinhTong($arr = null)
{
    $tong = 0;
    for ($i = 0; $i < sizeof($arr); $i++) {
        $tong += $arr[$i];
    }

    return "Tổng Các Số Trong Mảng Là : " . $tong . "<br>";
};

function soLonNhat($arr = null)
{
    $max = $arr[0];
    for ($i = 1; $i < sizeof($arr); $i++) {
        if($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }

    return "Số Lớn Nhất Là : " . $max . "<br>";
}


function soNhoNhat($arr = null) {
    $min = $arr[0];
    for ($i = 1; $i < sizeof($arr); $i++) {
        if($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }

    return "Số Nhỏ Nhất Là : " . $min . "<br>";
}
echo tinhTong($array);

echo soLonNhat($array);

echo soNhoNhat($array);