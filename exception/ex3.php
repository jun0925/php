<?php 
/**
 * 사용자 정의 예외 정의
 * 다른 유형의 예외를 다른 방식으로 처리하기 위해 고유한 사용자 정의 예외 처리기를 정의할 수도 있습니다.
 * catch 각 예외 유형에 대해 별로의 블록을 사용할 수 있습니다. 
 * 
 * Exception은 모든 예외의 기본 클래스이기 때문에 Exception 클래스를 확장하여 사용자 정의 예외를 정의할 수 있습니다.
 * 사용자 정의 예외 클래스는 PHP의 Exception 클래스에서 모든 속성과 메서드를 상속합니다.
 * 사용자 정의 예외 클래스에 사용자 정의 메소드를 추가할 수도 있습니다.
 * 다음 예를 확인해 보겠습니다. 
 */
// Extending the Exception class
class EmptyEmailException extends Exception {}
class InvalidEmailException extends Exception {}

$email = "someuser@example..com";

try{
    // Throw exception if email is empty
    if($email == ""){
        throw new EmptyEmailException("<p>Please enter your E-mail address!</p>");
    }

    // Throw exception if email is not valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
        throw new InvalidEmailException("<p><b>$email</b> is not a valid E-mail address!</p>");
    }

    // Display success message if email is valid
    echo "<p>SUCCESS: Email validation successful.</p>";
    // 여러 catch 블록은 생성된 예외 유형에 따라 다른 오류 메시지를 표시하는데 사용됩니다.
}catch(EmptyEmailException $e){
    echo $e->getMessage();
}catch(InvalidEmailException $e){
    echo $e->getMessage();
}

?>