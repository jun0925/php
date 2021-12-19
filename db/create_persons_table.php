<?php 
/**
 * PHP를 사용하여 MySQL 데이터베이스 내부에 테이블 생성
 * 이전 장에서 우리는 MySQL 서버에 데이터베이스를 생성하는 방법을 배웠습니다.
 * 이제 실제로 데이터를 보유할 데이터베이스 내부에 테이블을 생성할 차례입니다.
 * 테이블 정보를 행과 열로 구성합니다.
 * 
 * SQL CREATE TABLE문은 데이터베이스에 테이블을 생성하는데 사용됩니다.
 * 
 * CREATE TABLE 명령문을 사용하여 SQL 쿼리를 만들어 보겠습니다.
 * 그런 다음 이 SQL 쿼리를 PHP mysqli_query() 함수에 전달하여 실행하여 최종적으로 테이블을 생성하겠습니다.
 */

// $method = "procedural";
$method = "object_oriented";
// $method = "PDO";

// Attempt create table query execution
// persons 테이블 만들기
$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";

switch($method){
    case "procedural":
        require_once "procedural.php";
        if(mysqli_query($link, $sql)){
            echo "Table created successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql . " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($link);
        break;
    case "object_oriented":
        require_once "object_oriented.php";
        if($mysqli->query($sql) === true){
            echo "Table created successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql . " . $mysqli->error;
        }
        // Close connection
        $mysqli->close();
        break;
    case "PDO":
        require_once "pdo.php";
        break;
}
?>