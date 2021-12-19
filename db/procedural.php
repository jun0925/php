<?php 
// Attempt MYSQL server connection. Assuming you are rungging MySQL server with default setting (user 'root' with no password)

$hostname = "127.0.0.1";
$username = "root";
$password = "111111";
$database = "demo";

$link = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if($link === false){
    die("Error: Could not connect. " . mysqli_connect_error());
}

// Print host infomation
echo "Connect Successfully. Host info : " . mysqli_get_host_info($link) . "<br />";

// 스크립트 실행이 종료되는 즉시 MySQL 데이터베이스 서버에 대한 연결이 자동으로 닫힙니다.
// 그러나 더 일찍 닫고 싶다면 PHP mysqli_close() 함수를 호출하기만 하면 됩니다.
// Close connection
// mysqli_close($link);
?>