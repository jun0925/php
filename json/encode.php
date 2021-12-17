<?php 
/**
 * PHP로 JSON 구문 분석
 * JSON 데이터 구조는 PHP 배열과 매우 유사합니다.
 * PHP에는 JSON 데이터를 인코딩 및 디코딩하는 내장함수가 있습니다.
 * 이러한 기능은 각각 json_encode() 및 json_decode()입니다.
 * 두 함수 모두 UTF-8로 인코딩된 문자열 데이터에서만 작동합니다.
 */

/**
 * PHP에서 JSON 데이터 인코딩
 * PHP에서 json_encode() 함수는 값을 JSON 형식으로 인코딩하는 데 사용됩니다.
 * 인코딩되는 값은 데이터베이스 또는 파일 핸들과 같은 리소스를 제외한 모든 PHP 데이터 유형이 될 수 있습니다.
 * 아래 예제는 PHP 연관 배열을 JSON 객체로 인코딩하는 방법을 보여줍니다.
 */

// An associative array
$marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
// JSON 객체로 인코딩
echo json_encode($marks);

// An indexed array
$colors = array("Red", "Green", "Blue", "Orange", "Yellow");
// JSON 배열로 인코딩
echo json_encode($colors);

// An indexed array
$colors = array("Red", "Green", "Blue", "Orange");
// json_encode()에 JSON_FORCE_BJECT라는 옵션을 설정하여 JSON 배열을 JSON 객체로 반환하도록 강제 할수도 있습니다.
echo json_encode($colors, JSON_FORCE_OBJECT);
?>