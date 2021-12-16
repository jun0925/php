<?php 
/**
 * __NAMESPACE__ 상수는 현재 이름 공간의 이름을 반환합니다.
 */
namespace MyNamespace;
class MyClass
{
    public function getNamespace(){
        return __NAMESPACE__;
    }
}
$obj = new MyClass;
echo $obj->getNamespace(); // Displays: MyNamespace
?>