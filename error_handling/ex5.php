<?php 
/**
 * 오류 트리거
 * PHP 엔진은 스크립트에 문제가 발생할 때마다 오류를 유발하지만 사용자가 직접 오류를 유발할 수도 있습니다.
 * 이것은 잠재적인 문제가 심각한 오류로 바뀌기 전에 플래그를 지정할 수 있기 때문에 어플리케이션을 더욱 강력하게 만드는 데 도움이 될 수 있습니다.
 * 
 * 스크립트 내에서 오류를 트리거하려면 trigger_error() 생성하려는 오류를 메시지를 전달 하여 함수를 호출합니다.
 */

// 두 숫자의 나눗셈을 계산하는 다음 함수를 고려하십시오.
function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("The divisor cannnot be zero", E_USER_WARNING);
        return false;
    }
    return($dividend / $divisor);
}

// Calling the function
echo calcDivision(10, 0);
?>