<?php 

function divide($numberator, $denominator) {
    if($denominator == 0) {
        throw new ErrorException("lỗi , không thể chia cho 0");
    }

    return $numberator / $denominator;
}

try {
    echo divide(10,2);
    echo divide(10,0);
} catch (\Throwable $th) {
    //throw $th;
    echo "Bắt lỗi : " . $th->getMessage();
}