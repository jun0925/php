<?php 
if($_FILES["photo"]["error"] > 0) {
    // 파일 업로드 오류 발생
    echo "오류: " . $_FILES["photo"]["error"]. "<br />";
}else{
    echo "파일 이름: " . $_FILES["photo"]["name"] . "<br />";
    echo "파일 타입: " . $_FILES["photo"]["type"] . "<br />";
    echo "파일 크기: " . ($_FILES["photo"]["size"] / 1024) . " KB<br />";
    echo "저장 위치: " . $_FILES["photo"]["tmp_name"];
}
?>