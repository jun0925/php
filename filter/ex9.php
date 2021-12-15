<?php 
/**
 * 범위 내의 정수 유효성 검사
 * 다음 예제에서는 제공된 값이 정수인지 여부와 0에서 100 사이의 범위에 있는지 여부를 확인합니다.
 */

// Sample integer value
$int = 75;

// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100)))){
    echo "The <b>{$int}</b> is within the range of 0 to 100";
}else{
    echo "The <b>{$int}</b> is not within the range of 0 to 100";
}
?>