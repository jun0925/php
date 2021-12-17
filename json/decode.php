<?php 
/**
 * PHP에서 JSON 데이터 디코딩
 * JSON 데이터 디코딩은 인코딩만큼 간단합니다.
 * PHP json_decode() 함수를 사용하여 JSON 인코딩 문자열을 적절한 PHP 데이터 유형으로 변환할 수 있습니다.
 * 다음 예제는 JSON 객체를 PHP 객체로 디코딩 하거나 변환하는 방법을 보여줍니다.
 */

// Store JSON data in a PHP variable
$json = '{"Peter":65, "Harry":80, "John":78, "Clark":90}';

var_dump(json_decode($json)); // Displays : object(stdClass)#1 (4) { ["Peter"]=> int(65) ["Harry"]=> int(80) ["John"]=> int(78) ["Clark"]=> int(90) }
echo "<hr />";
/**
 * 기본적으로 json_decode() 함수는 객체를 반환합니다.
 * 그러나 두 번째 매개변수에 true를 지정함으로써 배열로 값을 리턴받을 수 있습니다.
 * 기본값은 false로 지정되어 있습니다.
 */
$json = '{"Peter":65, "Harry":80, "John":78, "Clark":90}';

var_dump(json_decode($json, true)); // array(4) { ["Peter"]=> int(65) ["Harry"]=> int(80) ["John"]=> int(78) ["Clark"]=> int(90) }
echo "<hr />";
/**
 * 이제 JSON 데이터를 디코딩하고 PHP에서 JSON 개체 또는 배열의 개별 요소에 액세스하는 방법을 보여 주는 예제를 확인하겠습니다.
 */

// Assign JSON encoded string to a PHP variable
$json = '{"Peter":65, "Harry":80, "John":78, "Clark":90}';

// Decode JSON data to PHP associative array
$arr = json_decode($json, true);
// Access values from ther associative array
echo $arr["Peter"]."<br />"; // Output: 65
echo $arr["Harry"]."<br />"; // Output: 80
echo $arr["John"]."<br />"; // Output: 78
echo $arr["Clark"]."<br />";  // Output: 90
echo "<hr />";

// Decode Json data to PHP object
$obj = json_decode($json);
// Access values from the returned object
echo $obj->Peter."<br />"; // Output: 65
echo $obj->Harry."<br />"; // Output: 80
echo $obj->John."<br />"; // Output: 78
echo $obj->Clark."<br />"; // Output: 90
echo "<hr />";

// foreach() 루프를 사용하여 디코딩된 데이터를 반복 할수도 있습니다.
$arr = json_decode($json, true);
foreach($arr as $key => $value){
    echo $key. "=>" . $value . "<br />";
}
echo "<hr />";
// Decode JSON data to PHP object
$obj = json_decode($json);

// Loop through the object
foreach($obj as $key => $value){
    echo $key . "=>" . $value . "<br />";
}
?>