<?php 
/**
 * die() 함수를 사용한 기본 오류 처리
 * 읽기 전용으로 텍스트 파일을 열려고 시도하는 다음 예를 고려하십시오.
 */

// Try to open a non-existent file
// file_exists 파일이 존재하는지 여부를 확인
if(file_exists("sample.txt")){
    $file = fopen("sample.txt", "r");
}else{
    // 액세스 하려는 파일이 존재하지 않습니다.
    die("Error : The file you are trying to access doesn't exist.");
}
?>