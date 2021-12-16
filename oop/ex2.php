<?php 
// Include class definition
// Rectangle.php class
require "ex1.php";

// Create a new object from Rectangle class
$obj = new Rectangle;

// Get the object properties values
echo $obj->length."<br />"; // output : 0
echo $obj->width."<br />"; // output : 0

// Set object properties values
$obj->length = 30;
$obj->width = 20;

// Read the object properties values again to show the change
echo $obj->length."<br />"; // output : 30
echo $obj->width."<br />"; // output : 20

// Call the object methods
echo $obj->getPerimeter()."<br />"; // output : 100;
echo $obj->getArea()."<br />"; // output : 600

/**
 * 화살표 기호 (->)는 지정된 개체의 포함된 속성 및 메서드에 액세스하는 데 사용되는 OOP 구조입니다.
 * 반면에 의사 변수 $this는 호출 개체, 즉 메서드가 속한 개체에 대한 참조를 제공합니다.
 */
?>