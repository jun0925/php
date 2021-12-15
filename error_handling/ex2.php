<?php
/**
 * 다음은 간단한 사용자 지정 오류 처리 기능의 예입니다.
 * 이 핸들러 customError()은 아무리 사소한 것이라도 오류가 발생할 때마다 트리거됩니다.
 * 그런 다음 오류 세부 정보를 브라우저에 출력하고 스크립트 실행을 중지합니다.
 */

// Error handler function
function customError($errno, $errstr){
    echo "<b>Error:</b> [{$errno}] {$errstr}";
}

/**
 * 사용자 정의 오류 처리기 함수를 사용하도록 PHP에 지시해야 합니다.
 * 내장 set_error_handler() 함수를 호출하고 함수 이르을 전달하기만 하면 됩니다.
 */

// set error handler
set_error_handler("customError");

// Trigger error
echo($test);
?>