<?php 
// 어떤 메소드로 양식이 제출되었는지 확인합니다.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // 파일이 오류 없이 업로드되었는지 확인합니다.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array(
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png"
        );

        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // 파일 확장명을 확인합니다.
        // pathinfo() 함수는 파일 경로에 대한 정보를 반환하는 함수이다. 옵션에 따라 연관 배열 또는 문자열로 반환한다.
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!array_key_exists($ext, $allowed)) die("오류: 올바른 파일 형식을 선택하십시오.");

        // 파일 크기르 확인합니다. - 최대 5MB까지 
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("오류: 파일 크기가 허용된 제한보다 큽니다.");

        // 파일의 유형을 확인합니다.
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " 이 이미 존재합니다.";
            }else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "파일이 성공적으로 업로드 되었습니다.";
            }
        }else{
            echo "오류: 파일을 업로드하는 동안 문제가 발생했습니다. 다시 시도하십시오.";
        }
    }else{
        echo "오류: " . $_FILES["photo"]["error"];
    }
}
?>