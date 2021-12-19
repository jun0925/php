<?php 
/**
 * 예외란 무엇인가
 * 예외는 일종의 예외적인 이벤트나 오류가 발생했음을 나태내는 신호입니다.
 * 예외는 데이터베이스 연결 또는 실패, 액세스하려는 파일이 존재하지 않는 등 다양한 이유로 발생할 수 있습니다.
 * 
 * PHP는 예외를 우아하게 처리할 수 있는 강력한 예외 처리 메커니즘을 제공합니다.
 * PHP의 기존 오류 처리 시스템과 달리 예외 처리는 오류처리를 위한 객체 지향 방식으로, 보다 제어되고 유연한 오류 보고 형식을 제공합니다.
 * 예외 모델은 PHP5에서 처음 도입되었습니다.
 * 
 * throw 및 try...catch 문 사용
 * 예외 기반 접근 방식에서 프로그램 코드는 try블록에 작성되며 블록 throw의 코드 실행 중에 예외 이벤트가 발생하면 명령문을 사용하여 예외를 throw할 수 있습니다.
 * 그런 다음 하나 이상의 catch 블록에 의해 포착되고 해결됩니다.
 * 
 * 다음 예는 예외 처리가 작동하는 방식을 보여줍니다.
 */
function division($dividend, $divisor){
    // Throw exception if divisor is zero
    if($divisor == 0){
        throw new Exception('Division by zero.');
    }else{
        $quotient = $dividend / $divisor;
        echo "<p>{$dividend} / {$divisor} = {$quotient}</p>";
    }
}

try{
    division(10, 2);
    division(30, -4);
    division(15, 0);

    // If exception is thrown following line won't execute
    echo '<p>All divisions performed successfully.</p>';
}catch(Exception $e){
    // Handle the exception
    echo "<p>Caught exception: " . $e->getMessage() ."</p>";
}

// Continue execution
echo "<p>Hello World!</p>";
?>