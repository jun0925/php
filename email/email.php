<?php
$to = 'maryjane@email.com'; // 받는 사람의 이메일 주소
$subject = 'Marriage Proposal'; // 이메일 제목
$message = 'Hi Jane, will you marry me?'; // 이메일 내용
$from = 'peterparker@email.com'; // 보내는 사람의 이메일

// 이메일 전송하기
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>