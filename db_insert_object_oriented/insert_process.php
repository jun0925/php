<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3306");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO persons(first_name, last_name, email) VALUES ('$first_name','$last_name','$email')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
}else{
    echo "ERROR: Colud not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>