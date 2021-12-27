<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3307");

if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->connect_error);
}

$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
if($mysqli->query($sql) === true){
    echo "users 테이블을 생성했습니다.";
}else{
    echo "오류 : users 테이블 생성에 실패했습니다. $sql. " .$mysqli->error;
}
?>