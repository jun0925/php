<?php
$url = "https://fcm.googleapis.com/fcm/send";
$token = "ekHGPWyAauU:APA91bF_M5H2isP51wnjJg-Rvf04l32QfVTalk4ySqfBA1N8RlTNPrbM46DSnom0NOQnC3ro8RQMutDOkCJxxGIzOt7V8xB3H_26z2ZJPfKGqfLDBh3mqThqjlMARmrR1X9a3vY8t63J"; // 실기기
// $token = "cqk7PM4nJRs:APA91bEOLi8nRDf7erhgMj4zJeN8Po58vOG1z7FCVIM_ZsuooSYbn9vgJIa0w5LyJM_gp5IFnGF2lKvVj68q6986Et53kwR6xJ7cG7E1b6xCPu7mW_q9H-zUzsVEV5ffsOLAcCO0bFxM"; // 에뮬레이터
$serverKey = 'AAAAu5LWDiM:APA91bH7waZF6JYzK5mhSLnNYMKSRjwFquWqzi6L02gyFLBmghVsyCxP8ykxJTeGpaosOnwOjcqxFg6cw4Wd5h4G__UNwzKOBe_0wJi3S1pzF6Nh5_CfU0USqHgDFG-YgcckTlCQFtk5';
// $title = "Notification title";
// $body = "Hello I am from Your php server";
$title = $_POST['title'];
$body = $_POST['content'];
$notification = array('title' => $title, 'body' => $body, 'sound' => 'default', 'badge' => '1');
$arrayToSend = array('to' => $token, 'notification' => $notification, 'priority' => 'high');
$json = json_encode($arrayToSend);
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: key=' . $serverKey;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 //Send the request 
$response = curl_exec($ch); 
curl_close($ch); 
 //Close request 
if (false) {
    die('FCM Send Error: ' . curl_error($ch));
} else {
    echo "<script>alert('알람이 전송되었습니다.'); window.location.href='/tutorials/curl_input.php';</script>";
}
?>