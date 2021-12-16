<?php 
/**
 * 생성자와 소멸자 사용
 * 객체 지향 프로그래밍을 더 쉽게 만들기 위해 PHP 객체 내에서 특정 동작이 발생할 떄 자동으로 실행되는 몇 가지 마법의 메서드를 제공합니다.
 * 
 * 예를 들어 생성자 __constuct() 라고 하는 매직 메서드는 새 객체가 생성될 때맏 자동으로 실행됩니다.
 * 유사하게, 매직 메소드(destructor)는 객체가 파괴될 때 자동으로 실행됩니다.
 * 소명자 함수는 객체가 소명되면 객체에 할당된 모든 리소스를 정리합니다. __destruct()
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

// Output a message at the end of the file
echo "The end of the file is reached.<br />";
?>