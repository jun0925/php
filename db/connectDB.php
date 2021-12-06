<?php 
$host = "127.0.0.1";
$user = "root";
$pw = "111111";
$dbName = "myapp";
$dbConnect = new mysqli($host, $user, $pw, $dbName);
$dbConnect->set_charset("utf-8");

if(mysqli_connect_errno()){
    echo "데이터베이스 접속 실패";
    echo mysqli_connect_error();
}
?>