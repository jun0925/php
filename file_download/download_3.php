<?php
if(isset($_REQUEST["file"])){
    // 매개변수 가져오기
    $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string

    // 정규식을 사용하여 파일 이름에 "../"와 같은 잘못된 문자가 포함되어 있는지 테스트합니다.
    if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)){
        $filepath = "images/" . $file;

        // 다운로드 프로세스
        if(file_exists($filepath)){
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // 현재 버퍼에 가지고 있는 값을 출력합니다.
            readfile($filepath);
            die();
        }else{
            http_response_code(404);
            die();
        }
    }else{
        die("Invalid file name!");
    }
}
?>