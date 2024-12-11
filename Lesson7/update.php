<?php 
require_once "./connect.php";

$productId = 2;
$newName = "điện thoại đã chỉnh sửa bởi bảo";
$newPrice = 2943;

$sql = "UPDATE products SET name = :name, price = :price WHERE id = :id";

$stmt = $conn->prepare($sql);


$stmt->bindParam(':name',$newName,PDO::PARAM_STR);
$stmt->bindParam(':price',$newPrice,PDO::PARAM_STR);
$stmt->bindParam(':id',$productId,type: PDO::PARAM_STR);

$stmt->execute();

echo "<br> Updated thành công products với id : " . $productId;