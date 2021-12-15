<?php 
// $int가 0으로 설정되면 예제 코드는 잘못된 정수 메시지를 표시합니다. 이 문제를 해결하려면 다음과 같이 값 0을 명시적으로 테스트해야 합니다.

// Sample integer value
$int = 0;

// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)){
    echo "The <b>{$int}</b> is valid integer";
}else{
    echo "The <b>{$int}</b> is not a valid integer";
}
?>