<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 업로드 폼</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <h2>업로드 파일</h2>
        <label for="fileSelect">FileNmae:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size 5 MB.</p>
    </form>
</body>
</html>