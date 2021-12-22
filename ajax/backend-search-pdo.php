<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo;port=3307", "root", "111111");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " .$e->getMessage());
}

try{
    if(isset($_REQUEST['term'])){
        $sql = "SELECT * FROM countries WHERE name LIKE :term";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST["term"] . '%';

        $stmt->bindParam(":term", $term);

        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>". $row['name'] ."</p>";
            }
        }else{
            echo "<p>No mataches found</p>";
        }
    }
}catch(PDOException $e){
    die("ERROR: Colud not able to execute $sql. " . $e->getMessage());
}

unset($stmt);

unset($pdo);
?>