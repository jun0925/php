<?php 
/**
 * 매직 상수란 무엇입니까
 * PHP는 사용 위치에 따라 변경되는 미리 정의된 특수 상수 집합을 제공합니다.
 * 이러한 상수를 매직상수라고 합니다.
 * 예를 들어 __LINE__ 은 스킙트에서 사용되는 행에 따라 다릅니다.
 * 
 * 매직 상수는 두 개의 밑줄로 시작하여 두개의 밑줄로 끝납니다.
 */

echo "Line number " . __LINE__ . "<br />"; // Displays : Line number 11
echo "Line number " . __LINE__ . "<br />"; // Displays : Line number 12
echo "Line number " . __LINE__ . "<br />"; // Displays : Line number 13
?>
