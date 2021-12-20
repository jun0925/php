<?php 
$mysqli = new mysqli("127.0.0.1","root", "111111", "demo", "3307");

if($mysqli === false){
    die("ERROR: Colud not connection. " . $mysqli->error);
}

$sql = "INSERT INTO persons(first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param("sss", $first_name, $last_name, $email);

    $first_name = $_REQUEST["first_name"];
    $last_name = $_REQUEST["last_name"];
    $email = $_REQUEST["email"];

    if($stmt->execute()){
        echo "Redcords inserted successfully.";
    }else{
        echo "ERROR: Colud not execute query: $sql. " . $mysqli->error;
    }
}else{
    echo "ERROR: Colud not prepare query: $sql. " . $mysqli->error;
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
?>