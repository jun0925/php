<?php 
/**
 * 단어 경계
 * 단어 경계 문자 (\b)는 패턴으로 시작하거나 끝나는 단어를 검색하는 데 도움이 됩니다.
 * 예를 들어, 정규표현식 /\bcar/은 car 패턴으로 시작하는 단어와 일치하고 cart, carrot 또는 cartoon과 일치하지만 oscar는 일치하지 않습니다.
 * 
 * 마찬가지로 정규 표현식 /car\b/ 은 car 패턴으로 끝나는 단어와 일치하며 scar, oscar 또는 supercar와 일치하지만 cart는 일치하지 않습니다.
 * 마찬가지로 /\bcar\b/ 패턴은 car로 시작하고 끝나는 단어와 일치하며 car라는 단어만 일치합니다.
 * 
 * 다음 예에서는 car로 시작하는 단어를 굴게 강조 표시합니다.
 */

 // car로 시작, w : 모든 단어 문자와 일치, * : 0개 이상 문자와 일치
$pattern = "/\bcar\w*/";
$replacement = '<b>$0</b>';
$text = "Words beging with car: cart, carrot, cartton. Words ending with car: scar, oscar, supercar.";
echo preg_replace($pattern, $replacement, $text);
?>