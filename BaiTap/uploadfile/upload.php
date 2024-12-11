<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $fileAvatar = $_FILES['avatar'];
    $targetFile = $targetDir . time() . '-' . $fileAvatar['name'];
    $flag = true;

    debug($fileAvatar);

    if(file_exists($targetFile)) {
        echo "xin lỗi , file đã tồn tại !";
        $flag = false;
    }

    $maxSize = 5 * 1024 * 1024; // 1MB = 1204KB = 1024 Byte
    if($fileAvatar['size'] > $maxSize) {
        echo "file quá lớn";
        $flag = false;
    }

    $allowedTypes = ['jpg','jpeg','png','gif','pdf','doc','docx'];

    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    if(!in_array($fileType,$allowedTypes)){
        echo "Không thích hợp !";
        $flag = false;
    }


    if($flag === true) {
        if(move_uploaded_file($fileAvatar['tmp_name'],$targetFile)) {
            echo "File Upload thành công !!!";
            echo "<img src='$targetFile' width='100px' >";
        } else {
            echo "xin lỗi , có lỗi khi upload";
        }
    } else {
        echo "Xin lỗi , file của bạn ko dc upload !";
    }
}


function debug($param){
    echo "<pre>";
    print_r($param);
    die;
}