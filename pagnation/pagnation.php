<?php 
include_once "../db/connectDB.php";

// 페이지값 구함
if(isset($_GET['page'])){
    $page = (int) $_GET['page'];
}else{
    // 페이지값이 없으면 1로 초기화
    $page = 1;
}

// 페이지에 출력할 레코드 수
$numView = 50;

// 변수 page값에 따른 LIMIT의 첫 번째 값 계산
$firstLimitValue = ($numView * $page) - $numView;

$sql = "SELECT * FROM member LIMIT {$firstLimitValue}, {$numView}";
$result = $dbConnect->query($sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고객 리스트</title>
    <style>
        table{
            font-size:10px;
        }
    </style>
</head>
<body>
    <h3>고객 리스트</h3>
    <table width="100%" bgcolor="skyblue" cellspacing="1">
        <tr bgcolor="white" align="center">
            <td>번호</td>
            <td>ID</td>
            <td>이름</td>
            <td>이메일</td>
            <td>성별</td>
            <td>가입일</td>
        </tr>

        <?php 
        for($i = 0; $i < $result->num_rows; $i++){
            $member = $result->fetch_array(MYSQLI_ASSOC);
        ?>

        <tr bgcolor="white" align="center">
            <td><?=$member['id']?></td>
            <td><?=$member['user_id']?></td>
            <td><?=$member['name']?></td>
            <td><?=$member['email']?></td>
            <td><?=($member['gender']) == 'w' ? '여성' : '남성'?></td>
            <td><?=$member['reg_time']?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>