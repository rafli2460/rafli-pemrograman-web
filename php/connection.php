<?php
$username = "root";
$password = "root123";
$dsn = "mysql:host=db;dbname=db_jenis70;charset=utf8mb4";

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: ". $e->getMessage());
}
