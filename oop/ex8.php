<?php 
/**
 * 정적 속성 및 메서드
 * 가시성 외에도 속성 및 메서드를 static으로 선언할 수 있으므로 클래스를 인스턴스화할 필요 없이 액세스할 수 있습니다.
 * 정적 속성 및 메서드는 :: 다음 ClassName::$property와 같이 범위 확인 연산자()를 사용하여 액세스할 수 있습니다. Class::method()
 * 
 * 정적으로 선언된 속성은 해당 클래스의 개체를 통해 액세스할 수 없지만 다음 예제와 같이 정적 메서드는 가능합니다.
 */

// Class definition
class HelloClass
{
    // Declare a static property
    public static $greeting = "Hello World!";

    // Declare a static method
    public static function sayHello(){
        echo self::$greeting;
    }
}

// Attempt to access static property and method directly
echo HelloClass::$greeting; // Output: Hello World!
HelloClass::sayHello(); // Output: Hello World!

// Attempt to access static property and method via object
$hello = new HelloClass;
echo $hello->greeting; // Undefined property
$hello->sayHello(); // Output: Hello World!
?>