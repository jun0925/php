<?php 
/**
 * MySQL 데이터베이스 테이블에 데이터 삽입
 * 
 * 이제 MySQL에서 데이터베이스와 테이블을 생성하는 방법을 이해했습니다.
 * 이 자습서에서는 테이블에 레코드를 삽입하기 위해 SQL 쿼리를 실행하는 방법을 배웁니다.
 * 
 * INSERT INTO문은 데이터베이스 테이블에 새 행을 삽입하는 데 사용됩니다.
 * 
 * INSERT INTO 적절한 값을 가진 문장을 사용하여 SQL 쿼리를 만들어 보겠습니다.
 * 그런 다음 이 삽입 쿼리를 PHP mysqli_query() 함수에 전달 하여 테이블에 데이터를 삽입 하는 방식으로 실행해 보겠습니다.
 * 다음은 first_name, last_name 및 email 필드에 대한 값을 지정 하여 개인 테이블에 새 행을 십입하는 예제입니다.
 */

$link = mysqli_connect("127.0.0.1", "root", "111111", "demo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
}else{
    echo "ERROR: Colud not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>