<?php 
/**
 * 다음 예제의 정규식은 PHP preg_split() 함수를 사용하여 쉼표, 쉬표 시퀀스, 공백 또는 이들의 조합으로 문자열을 분할합니다.
 */

/*
\s : 모든 공백 문자(공백, 탭, 줄 바꿈 또는 캐리지 리턴 문자)와 일치합니다.
p+ : 하나 이상의 문자 p와 일치합니다.
[\s,] : 모든 공배군자와 컴마에 대해여
*/

$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);

// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "<br />";
}
?>