<?php 
/**
 * 오류 로깅
 * 텍스트 파일에 오류 메시지 기록
 * 다음과 같은 오류 세부 정보를 로그 파일에 기록할 수도 있습니다.
 */

function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING);
        return false;
    }else{
        return($dividend/ $divisor);
    }
}

function customError($errno, $errstr, $errfile, $errline, $errcontext){
    $message = date("Y-m-d H:i:s - ");
    $message .= "Error [" . $errno . "], " . "{$errstr} in {$errfile} on line {$errline}, ";
    $message .= "Variables:" . print_r($errcontext, true) . "\r\n";

    error_log($message, 3, "logs/app_errors.log");
    die("There was a problem, please try again.");
}

set_error_handler("customError");
echo calcDivision(10, 0);
echo "This will naver be printed.";
?>