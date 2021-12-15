<?php 
/** 
 * IP 주소 확인
 * 다음 예제에서는 값이 유효한 IP 주소인지 여부를 확인합니다.
 * FILTER_FALG_IPV4 또는 FILTER_FLAG_IPV6 플래그를 각각 사용하여 IPV4 또는 IPV6 주소에 대한 요휴성 검사를 추가로 적용할 수 있습니다.
*/

// Sample IP address
$ip = "172.16.254.1";

// Validate sample IP address
if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    echo "The <b>{$ip}</b> is a valid IPV6 address";
}else{
    echo "The <b>{$ip}</b> is not a valid IPV6 address";
}
?>