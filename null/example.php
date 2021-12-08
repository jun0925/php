<?php 
// Null 병합 연산자
// php7에는 isset() 함수와 함께 삼항 연산자를 사용해야 하는 경우 속기로 사용할 수 있는 새로운 병합 연산자가 도입되었습니다.
// $_GET['name']이 존재하지 않는 경우에는 NULL 값을 반환합니다.

$name1 = isset($_GET['name']) ? $_GET['name'] : 'anonymous';

$name2 = $_GET['name'] ?? 'anonymous';
?>