<?php 
/**
 * 테이블에 여러 행 삽입
 * 한 번에 단일 삽입 쿼리를 사용하여 테이블에 여러 행을 삽입할 수도 있습니다.
 * 이렇게 하려면 INSERT INTO 명령문 내에 열 값의 여러 목록을 포함합니다.
 * 여기서 각 행의 열 값은 괄호로 묶고 쉼표로 구분해야 합니다.
 * 
 * 다음과 같이 person 테이블에 몇 개의 행을 더 삽입해 보겠습니다.
 */
$link = mysqli_connect("127.0.0.1", "root", "111111", "demo");

// Check connection
if($link === false){
    die("ERROR: Colud not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
    ('John', 'Rambo', 'johnrambo@mail.com'),
    ('Clark', 'Kent', 'clarkkent@mail.com'),
    ('John', 'Carter', 'johncarter@mail.com'),
    ('Harry', 'Potter', 'harrypoter@mail.com')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
}else{
    echo "ERROR: Colud not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>