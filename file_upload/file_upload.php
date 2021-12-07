<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 업로드 폼</title>
</head>
<body>
    <h1>파일 업로드</h1>
    <form action="file.php" method="post" name="file-upload" enctype="multipart/form-data">
        <input type="file" name="my-image" />
        <input type="submit" value="파일등록" />
    </form>
</body>
</html>