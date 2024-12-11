<?php 
require_once "./connect.php";

// $sql = "SELECT * FROM products ORDER BY id desc";

$sql = "SELECT * FROM products WHERE id = :id";

$stmt = $conn->prepare($sql);

$id = 2;

$stmt->bindParam(':id',$id);

$stmt->execute();

$result = $stmt->fetch();

echo "<pre>";

print_r($result);