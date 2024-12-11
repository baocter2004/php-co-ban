<?php 
require_once "./connect.php";

$productId = 10;

$sql = "DELETE FROM products WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id',$productId,type: PDO::PARAM_STR);

$stmt->execute();

echo "<br> Deleted thành công products với id : " . $productId;