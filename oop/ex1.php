<?php 
/**
 * class 키워드 뒤에 클래스 이름과 한 쌍의 중괄호 {} 를 사용하여 클래스를 선언할 수 있습니다.
 */
class Rectangle
{
    // Declare properties
    public $length = 0;
    public $width = 0;

    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }

    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    }
}
?>