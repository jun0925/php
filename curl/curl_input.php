<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FCM메시지 입력</h1>
    <form action="curl.php" method="post">
        <p><input type="text" name="title" placeholder="제목"></p>
        <p><textarea name="content" id="" cols="30" rows="10" placeholder="내용"></textarea></p>
        <input type="submit" value="전송">
    </form>
    <?php 
    // $a = '{"multicast_id":4606601593261317242,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1631603699994587%7c73d4677c73d467"}]}';
    // $b = json_decode($a, true);
    // print($b['success']);
    ?>
</body>
</html>