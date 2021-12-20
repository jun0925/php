<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record Form</title>
</head>
<body>
    <form action="insert_process.php" method="post">
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" id="first_name" />
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="last_name" />
        </p>
        <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress" />
        </p>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>