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
    // Create prepared statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':first_name', $_REQUEST['first_name']);
    $stmt->bindParam(':last_name', $_REQUEST['last_name']);
    $stmt->bindParam(':email', $_REQUEST['email']);

    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
}catch(PDOException $e){
    die("ERROR: Colud not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>