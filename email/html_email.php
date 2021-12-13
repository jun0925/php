<?php
$to = 'maryjane@email.com'; // 보내는 사람의 이메일
$subject = 'Marriage Proposal'; // 이메일 제목
$from = 'peterparker@email.com'; // 이메일 내용

// HTML 메일을 보내려면 Content-type 헤더를 설정해야 합니다.
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// 이메일 헤더 생성
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// 간단한 HTML 이메일 메시지 작성
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';

// 이메일 보내기
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>