<?php 
/** 
 * 상속을 통한 클래스 확장
 * 클래스는 extends 키워드를 사용하여 다른 클래스의 속성과 메서드를 상속할 수 있습니다.
 * 이러한 확장 프로세스를 상속이라고 합니다.
 * 이것은 아마도 객체 지향 프로그래밍 모델을 사용하는 가장 강력한 이유일 것입니다.
*/

// Include class definition
require "ex1.php";

// Define a new class based on an existing class
class Square extends Rectangle
{
    // Method to test if the rectangle is also a square
    public function isSquare(){
        if($this->length == $this->width){
            return true; // Square
        }else{
            return false; // Not a square
        }
    }
}

// Create a new object from Square class
$obj = new Square;

// Set object properties values
$obj->length = 20;
$obj->width = 20;

// Call the object methods
if($obj->isSquare()){
    echo "The area of the square is ";
}else{
    echo "The area of the rectangle is ";
}

echo $obj->getArea();

/**
 * 위의 예제에서 볼 수 있듯이 Square의 클래스 정의에는 
 * 명시적으로 getArea()메서드나 $length, $width 속성이 포함되어 있지 않지만 
 * Square 클래스의 인스턴스는 부모 Rectangle 클래스에서 상속받았기 때문에 사용할 수 있습니다.
 * 
 * 자식 클래스는 부모 클래스에서 파생되므로 파생 클래스라고도 하며 부모는 기본 클래스라고 합니다.
 */
?>