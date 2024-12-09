<?php 
require_once './Product.php';
require_once './CartItem.php';
require_once './Cart.php';

function debug($param) {
    echo "<pre>";

    print_r($param);

    die;
}


// Sản phẩm 

$product1 = new Product(1,'điện thoại',1000);
$product2 = new Product(2,'laptop',2000);


$cart = new Cart();
$cart->addProduct($product1,2);
$cart->addProduct($product2,4);

$cart->displayCart();

$cart->removeProduct(2);

$cart->displayCart();