<?php 
/**
 * __FUCNTION__ 상수는 현재 함수의 이름을 반환합니다.
 */
function myFunction(){
    echo "The function name is - " . __FUNCTION__;
}
myFunction(); // Displays: The function name is - myFunction
?>