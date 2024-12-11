<?php
session_start();

$_SESSION['students'] = [
    [
        'name' => 'Chu Văn Thái Bảo',
        'age' => 20,
        'mark' => 9.0
    ],
    [
        'name' => 'Chu Văn Bảo',
        'age' => 23,
        'mark' => 3.0
    ]
];

echo "<pre>";
print_r($_SESSION);
