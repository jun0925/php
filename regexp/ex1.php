<?php 
/**
 * 다음 예제는 정규식과 PHP preg_match() 함수를 사용하여 문자열에 패턴이 존재하는지 여부를 찾는 방법을 보여줍니다.
 */

// ca가 들어가고 k 혹은 f가 들어가면서 e로 끝나는 단어를 찾는 정규식
$patten = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if(preg_match($patten, $text)){
    echo "Match found!";
}else{
    echo "Match not found";
}
?>