<?php 
/**
 * PHP를 사용하여 MySQL 데이터베이스 생성
 * 이제 MySQL 데이터베이스 서버에 대한 연결을 여는 방법을 이해했습니다.
 * 이 튜토리얼에서는 SQL쿼리를 실행하여 데이터베이스를 생성하는 방법을 배웁니다.
 * 
 * 데이터를 저장하거나 액세스하기 전에 먼저 데이터베이스를 생성해야 합니다.
 * 이 CREATE DATABASE 명령문은 MySQL에서 새 데이터베이스를 생성하는데 사용됩니다.
 * 
 * CREATE DATABASE 명령문을 사용하여 SQL 쿼리를 만들어 보겠습니다.
 * 그런 다음 이 SQL 쿼리를 PHP mysqli_query() 함수에 전달하여 실행하여 최종적으로 데이터베이스를 생성하겠습니다.
 * 다음 예시에서는 demo라는 데이터 베이스를 생성합니다. 
 */

$method = "procedural";
// $method = "object_oriented";
// $method = "PDO";

switch($method){
    case "procedural":
        require_once "procedural.php";
        $sql = "CREATE DATABASE demo";
        if(mysqli_query($link, $sql)){
            echo "Database created successfully";
        }else{
            echo "ERROR: Could not able to execute $sql . " . mysqli_error($link);
        }
        break;
    case "object_oriented":
        break;
    case "PDO":
        break;
}
?>