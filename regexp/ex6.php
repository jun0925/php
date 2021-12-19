<?php 
/**
 * 패턴 수정자
 * 패턴 수정자를 사용하면 패턴 일치가 처리되는 방식을 제어할 수 있습니다.
 * 패턴 수정자는 정규식 바로 뒤에 배치됩니다.
 * 예를 들어 대소문자를 구분하지 않고 패턴을 검색하려면 다음 i와 같이 수정자를 사용할 수 있습니다.
 * /pattern/i
 * 다음 표에는 가장 일반적으로 사용되는 몇 가지 패턴 수정자가 나와 있습니다.
 * 
 * i : 대소문자를 구분하지 않는 방식으로 일치를 만듭니다.
 * m : 문자열 경계 대신 줄 바꾸 경계(즉, 여러 줄 문자열 내에서 각 줄의 시작 또는 끝)와 일치하도록 ^ 및 의 동작을 변경합니다. $
 * g : 전역 일치를 수행합니다. 즉, 모든 항목을 찾습니다.
 * o : 표현식을 한 번만 평가합니다.
 * s : . 개행을 포함한 모든 문자와 일치하도록 (점)의 동작을 변경합니다.
 * x : 명확성을 위해 정규식 내에서 공백과 주석을 사용할 수 있습니다.
 * 
 * 다음 예제는 i 수정자와 PHP preg_match_all() 함수를 사용하여 대소문자를 구분하지 않는 전역 검색을 수행하는 방법을 보여줍니다.
 */
$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
echo "<hr />";
/**
 * 마찬가지로 다음 예제에서는 PHP 함수와 함께 ^ 앵커 및  m 수정자를 사용하여 여러 줄 문자열의 모든 줄 시작 부분에서 일치시키는 방법을 보여줍니다.
 * preg_match_all()
 */
$pattern = "/^color/im";
$text = "Color red is more visible than \n\rcolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?>