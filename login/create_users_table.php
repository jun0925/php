<?php 
$link = mysqli_connect("127.0.0.1", "root", "111111" , "3307");

if($link === false){
    die("ERROR: Colud not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if(mysqli_query($link, $sql)){
    echo "테이블이 생성되었습니다.";
}else{
    echo "테이블 생서에 실패했습니다. $sql. " .mysqli_error($link);
}

mysqli_close($link);
?>