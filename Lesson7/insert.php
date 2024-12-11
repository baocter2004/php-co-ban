<?php 
require_once "./connect.php";

$sql = "INSERT INTO products (name,price) VALUES (:name,:price)";

$stmt = $conn->prepare($sql);

$name = "điện thoại";
$price = 293943;

$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':price',$price,PDO::PARAM_STR);

$stmt->execute();

echo "<br> insert thành công products với id : " . $conn->lastInsertId();