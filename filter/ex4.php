<?php 
/** 
 * IP 주소 확인
 * 다음 예제에서는 값이 유효한 IP 주소인지 여부를 확인합니다.
*/

// Sample IP address
$ip = "172.16.254.1";

if(filter_var($ip, FILTER_VALIDATE_IP)){
    echo "The <b>{$ip}</b> is a valid IP address";
}else{
    echo "The <b>{$ip}</b> is not a valid IP address";
}
?>