<?php 
// MySQLi, 절차적 방식
$link = mysqli_connect($hostname, $username, $password, $database);

// MySQLi, 객체 지향 방식
$link = new mysqli($hostname, $username, $password, $database);

// PDO 객체 방식
$pdo = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);
?>