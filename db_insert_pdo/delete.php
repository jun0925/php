<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo", "root", "111111");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}

try{
    $sql = "DELETE FROM persons WHERE id = 1";
    $pdo->exec($sql);
    echo "Records were deleted successfully.";
}catch(PDOException $e){
    die("ERROR: Colud not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>