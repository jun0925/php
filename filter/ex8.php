<?php 
/**
 * URL 삭제 및 검증
 * FILTER_FLAG_QUERY_REQUIRED 다음 예와 같이 플래그를 사용하여 URL에 쿼리 문자열이 포함되어 있는지 여부를 확인할 수도 있습니다.
 */

// Sample website url
$url = "http://www.example.com?topic=filters";

// Validate website url for query string
if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo "The <b>{$url}</b> contains query string";
}else{
    echo "The <b>{$url}</b> dose not contain query string";
}
?>