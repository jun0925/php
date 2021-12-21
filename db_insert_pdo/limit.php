<?php 
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=demo", "root", "111111");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}

try{
    $sql = "SELECT * FROM persons LIMIT 3";
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        unset($result);
    }else{
        echo "No records matching your query were found.";
    }
}catch(PDOException $e){
    die("ERROR: Colud not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>