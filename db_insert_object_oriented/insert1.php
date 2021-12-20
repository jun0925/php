<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3306");

// Check connecetion
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'pterparker@mail.com')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>