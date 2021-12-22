<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo");

if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->connect_error);
}

$sql = "DELETE FROM persons WHERE id = 1";
if($mysqli->query($sql) === true){
    echo "Records were delted successfully.";
}else{
    echo "ERROR: Colud not able to execute $sql. " .$mysqli->error;
}

// Close connection
$mysqli->close();
?>