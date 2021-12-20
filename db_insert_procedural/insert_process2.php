<?php 
$link = mysqli_connect("127.0.0.1", "root", "111111", "demo");

// Check connection
if($link === false){
    die("ERROR: Colud not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons(first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);

    // Set parameters
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];

    // Attempt to execute the prepred statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    }else{
        echo "ERROR: Colud not execute query: $sql. " . mysqli_error($link);
    }
}else{
    echo "ERROR: Colud not prepare query: $sql. " . mysqli_error($link);
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);
?>