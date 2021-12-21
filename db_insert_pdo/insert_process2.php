<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo;port=3307", "root", "111111");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}

try{
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':first_name', $_REQUEST['first_name'], PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $_REQUEST['last_name'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);

    $stmt->execute();
    echo "Records inseted successfully.";
}catch(PDOException $e){
    die("ERROR: Colud not prepare/execute query: $sql. " . $e->getMessage());
}

// Close statement
unset($stmt);

// Close connection
unset($pdo);
?>