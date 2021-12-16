<?php 
/**
 * __METHOD__ 상수는 현재 클래스 메소드의 이름을 반환합니다.
 */
class Sample
{
    public function myMethod(){
        echo __METHOD__;
    }
}
$obj = new Sample;
$obj->myMethod(); // Displays: Smaple::myMethod
?>