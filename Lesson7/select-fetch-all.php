<?php 
require_once "./connect.php";

$sql = "SELECT * FROM products ORDER BY id desc";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<pre>";

print_r($result);