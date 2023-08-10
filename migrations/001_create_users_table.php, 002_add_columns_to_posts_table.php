<?php
require_once '../db/Connect.php';

$pdo->exec('CREATE TABLE Products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    item VARCHAR(255) NOT NULL,
    price INT(5) NOT NULL
)');
?>
