<?php 
/**
 * __CALSS 상수는 현재의 클래스 이름을 반환합니다.
 */
class MyClass
{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new MyClass();
echo $obj->getClassName(); // Displays: MyClass
?>