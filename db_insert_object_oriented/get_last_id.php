<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3307");

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$sql = "INSERT INTO persons(first_name, last_name, email) VALUES ('Ron','Weasley','ronweasley@mail.com')";
if($mysqli->query($sql) === true){
    $last_id = $mysqli->insert_id;
    echo "Records inserted successfully. Last inseted ID is: " . $last_id;
}else{
    echo "ERROR: Colud not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>