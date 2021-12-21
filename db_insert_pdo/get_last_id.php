<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo;port=3307", "root", "111111",);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}

try{
    $sql = "INSERT INTO persons(first_name, last_name, email) VALUES ('Ron','Weasley','ronweasley@mail.com')";
    $pdo->exec($sql);
    $last_id = $pdo->lastInsertId();
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;
}catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>