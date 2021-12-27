<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo;port=3307", "root", "111111");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOEXCEPTION $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}

try{
    $sql = "CREATE TABLE users (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "users 테이블이 생성되었습니다.";
}catch(PDOException $e){
    die("ERROR: Colud not able to execute $sql. " .$e->getMessage());
}

// Close connection
unset($pdo);
?>