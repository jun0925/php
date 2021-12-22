<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3307");

if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->connect_error);
}

$sql = "UPDATE persons SET email='perterparker_new@mail.com' WHERE id=1";
if($mysqli->query($sql) === true){
    echo "Records were updated successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>