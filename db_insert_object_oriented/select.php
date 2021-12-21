<?php
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3307");

if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->error);
}

$sql = "SELECT * FROM persons";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    }else{
        echo "No records matching your query were found.";
    }
}else{
    echo "ERROR: Colud not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>