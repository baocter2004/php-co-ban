<?php
session_start();

$validUserName = "admin";
$validPassword = "123456";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if ($user_name == $validUserName && $password == $validPassword) {
        if (isset($_POST['remember_me'])) {
            setcookie('user_name', $user_name, time() + 3600, "/");
            setcookie('password', $password, time() + 3600, "/");
        } else {
            $_SESSION['user_name'] = $user_name;
        }

        header('Location: welcome.php');
       
    } else {
        $_SESSION['error'] = "Sai UserName Hoặc Password";
        header('Location: index.php');
       
    }
}
