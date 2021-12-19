<?php 
// Attemp MySQl server connection. Assuming you are running MySQL server with default setting (user 'root' with no password)
$hostname = "127.0.0.1";
$username = "root";
$password = "111111";
// $database = "demo";

try{
    $pdo = new PDO("mysql:host={$hostname}", $username, $password);
    // $pdo = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);

    // Set the PDO error mode to exception
    // PDO::ATTR_ERRMODE 속성을 설정하면 PDO::ERRMODE_EXCEPTION 데이터 베이스 오류가 발생 할 떄마다 예외가 발생하도록 PDO에 지시합니다.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Print host infomation
    echo "Connect Successfully. Host info: " . $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
}catch(PDOException $e){
    die("ERROR: Colud not connct, " . $e->getMessage());
}

// 스크립트 실행이 종료되는 즉시 MySQL 데이터베이스 서버에 대한 연결이 자동으로 닫힙니다.
// 그러나 더 일찍 닫고 싶다면 PHP mysqli_close() 함수를 호출하기만 하면 됩니다.
// Close connection
unset($pdo);
?>