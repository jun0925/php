<?php 
$link = mysqli_connect("127.0.0.1","root","111111","demo");

// Check connection
if($link === false){
    die("ERROR: Colud not connect. " . mysqli_connect_error());
}

// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);

    // Set the parameters values and execute the statement againg to insert another row
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hremionegranger@mail.com";
    mysqli_stmt_execute($stmt);

    echo "Records inseted successfully.";
}else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);
?>