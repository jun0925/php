<?php 
$link = mysqli_connect("127.0.0.1", "root", "111111", "demo");

// Check connection
if($link === false){
    die("ERROR: Colud not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name','$last_name','$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>