<?php 
/**
 * 객체 지향 프로그래밍의 진정한 힘은 다음과 예제와 같이 동일한 클래스의 여러 인스턴스를 사용할 때 분명해집니다.
 */

// Include class definition
require "ex1.php";

// Create multiple objects from the Rectangle class
$obj1 = new Rectangle;
$obj2 = new Rectangle;

// Call the methods of both the objects
echo $obj1->getArea()."<br />"; // output : 0
echo $obj2->getArea()."<br />"; // output : 0

// Set $obj1 properties values
$obj1->length = 30;
$obj1->width = 20;

// Set $obj2 properties valeus
$obj2->length = 35;
$obj2->width = 50;

// Call the methods of both the objects again
echo $obj1->getArea()."<br />"; // output : 600
echo $obj2->getArea()."<br />"; // output : 1750

/**
 * 위의 예제에서 볼 수 있듯이 getArea() 다른 개체에서 메서드를 호출하면 해당 메서드가 다른 데이터 집합에서 작동합니다.
 * 각 개체 인스턴스는 고유한 속성과 메서드를 사용하여 완전히 독립적이므로 동일한 클래스에 있더라도 독립적으로 조작할 수 있습니다.
 */
?>