<?php 
/**
 * ^p : 줄의 시작 부분에 있는 문자 p와 일치합니다.
 * p$ : 줄 끝에 있는 문자 p와 일치합니다.
 * 
 * 다음 예제의 정규식은 PHP preg_grep() 함수를 사용하여 문자 "J"로 시작하는 이름 배열의 값을 표시합니다.
 */

 // J로 시작하는
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);

// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "<br />";
}
?>