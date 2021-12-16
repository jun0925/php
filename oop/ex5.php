<?php 
/**
 * 스크립트가 종료되면 소멸자가 자동으로 호출됩니다.
 * 그러나 소멸자를 명시적으로 트리거 unset() 하려면 다음과 같이 PHP 함수를 사용하여 객체를 소멸시킬 수 있습니다.
 */

class MyClass
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!<br />';
    }

    // Destructor
    public function __destruct(){
        echo 'The class "' . __CLASS__ . '" was destroyed.<br />';
    }
}

// Create a new object
$obj = new MyClass;

// Destroy the object
unset($obj);

// Output a message at the end of the file
echo "The end of the file is reached.";

/**
 * PHP는 스크립트가 완료되면 실행 중에 할당된 모든 리소스를 자동으로 정리합니다.
 * (예: 데이터베이스 연결 닫기, 개체 파괴 등)
 */
?>