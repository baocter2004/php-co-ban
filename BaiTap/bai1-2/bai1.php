<?php 
// khai báo các mảng số , thực hiện tính tổng các số trong mảng

$array = [1,2,4,6,8,9];

function tinhTong($arr = null) {
    $tong = 0;
    for ($i=0; $i < sizeof($arr) ;$i++) { 
        $tong += $arr[$i];
    }

    return "Tổng Các Số Trong Mảng Là : " . $tong;
};

echo tinhTong($array);