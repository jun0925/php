<?php 
/**
 * 유사하게, preg_match_all() 함수를 사용하여 문자열 내에서 모든 일치 항목을 찾을 수 있습니다.
 */

 // ca로 시작해서 k 혹은 f가 들어가면서 e로 끝나는 단어를 찾는 정규식
$patten = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($patten, $text, $array);
echo $matches . " matches were found.";
?>