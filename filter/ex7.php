<?php
/**
 * URL 삭제 및 검증
 * 다음 예제에서는 URL을 삭제하고 유효성을 검사하는 방법을 보여줍니다.
 */

// Sample website url
$url = "http://www.example.com";

// Remove all illegal chracters from url
// FILTER_SANITIZE_URL 필터는 문자 숫자 및 제외 제공된 URL 문자열에서 모든 잘못된 문자를 제거합니다. $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);

// Validate website url
if($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
    echo "The {$url} is a valid website url";
}else{
    echo "The {$url} is not a valid website url";
}
?>