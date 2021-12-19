<?php 
/**
 * 다음 예제에서는 정규 표현식과 PHP preg_replace() 함수를 사용하여 문자열에서 공백을 찾고 하이픈 문자로 바꾸는 방법을 보여줍니다.
 */

$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\nSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br />";

// Replace only spces
echo str_replace(" ", "-", $text);
?>