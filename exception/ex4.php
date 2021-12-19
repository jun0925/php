<?php 
/**
 * 전역 예외 처리기 설정
 * 예외가 catch되지 않으면 이 장의 앞부분에서 논의했듯이 PHP는 "Uncaught Exception..." 메세지와 함께 치명적인 오류를 생성합니다.
 * 이 오류 메시지에는 문제가 발생한 파일 이름 및 줄 번호와 같은 민감한 정보가 포함될 수 있습니다.
 * 이러한 정보를 사용자에게 노출하지 않으려면 사용자 정의 함수를 만들고 이를 함수에 등록하여 set_exception_handler() 포착되지 않은 모든 예외를 처리 할 수 있습니다.
 */

function handleUncaughtException($e){
    // Display generic error message to the user
    echo "Opps! Something went wrong. Please try again, or contact us if the problem persists.";

    // Construct the error string
    $error = "Uncaught Exception: " . $message = date("Y-m-d H:i:s - ");
    $error .= $e->getMessage() . " in file " . $e->getFile() . " on line " . $e->getLine() . "\n";

    // Log details of error in a file
    error_log($error, 3, "log/exceptionLog.log");
}

// Register custom exception handler
set_exception_handler("handleUncaughtException");

// Throw an exception
throw new Exception("Testing Exception!");
?>