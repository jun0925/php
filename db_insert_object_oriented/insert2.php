<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3306");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
        ('John', 'Rambo', 'johnrambo@mail.com'),
        ('Clark','Kent','clarkkent@mail.com'),
        ('John','Carter','johncarter@mail.com'),
        ('Harry','Potter','harrypotter@mail.com')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
}else{
    echo "ERROR: Colud not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>