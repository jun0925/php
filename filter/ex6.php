<?php 
/**
 * 이메일 주소 삭제 및 검증
 * 다음 예제에서는 전자 메일 주소를 삭제하고 유효성을 검사하는 방법을 보여줍니다.
 */

// Sample email address
$email = "someone@@example.com";

// Remove all illegal characters from eamil
// FILTER_SANITIZE_EMAIL 필터는 문자, 숫자 및 제외 제공된 이메일 주소 문자열에서 모든 잘못된 문자를 제거합니다. !#$%&'*+-=?^_`{|}~@.[].
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate email address
if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "The {$email} is a valid email address";
}else{
    echo "The {$email} is not a valid email address";
}
?>