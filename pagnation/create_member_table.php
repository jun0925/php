<?php 
include_once "../db/connectDB.php";

$sql = "CREATE TABLE member(
    id int NOT NUll PRIMARY KEY AUTO_INCREMENT,
	user_id varchar(10) not null,
    name VARCHAR(10) NOT NULL,
    password VARCHAR(50) NOT NULL,
    gender ENUM('m','w','x') DEFAULT 'x',
	email VARCHAR(255) NOT NULL,
    reg_time TIMESTAMP NOT NULL
)";

$result = $dbConnect->query($sql);
if($result){
    echo "member 테이블이 생성됐습니다.";
}else{
    echo "member 테이블 생성에 실패했습니다.<br />";
    echo $dbConnect->error;
}
?>