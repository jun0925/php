<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo;port=3306", "root", "111111");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}

// Attempt insert query execution
try{
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter','Parker','peterparker@mail.com')";
    $pdo->exec($sql);
    echo "Records inserted successfully.";
}catch(PDOException $e){
    die("ERROR: Colud not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>