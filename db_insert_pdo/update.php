<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo;port=3307","root", "111111");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " .$e->getMessage());
}

try{
    $sql = "UPDATE persons SET email='perterparker_new@mail.com' WHERE id=1";
    $pdo->exec($sql);
    echo "Records were updated successfully.";
}catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " .$e->getMessage());
}

// Close connection
unset($pdo);
?>