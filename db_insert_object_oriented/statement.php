<?php 
$mysqli = new mysqli("127.0.0.1","root","111111","demo","3307");

// Check connection
if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->error);
}

// Prepare an insert statement
$sql = "INSERT INTO persons(first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sss", $first_name, $last_name, $email);

    // Set the parameters values and execute the statement again to insert another row
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    $stmt->execute();

    // Set ther parameters values and execute ther statement to insert a row
    $first_name = "Ron";
    $last_name = "weasley";
    $email = "ronweasley@mail.com";
    $stmt->execute();

    echo "Records inserted successfully.";
}else{
    echo "ERROR: Colud not prepare query: $sql. " .$mysqli->error;
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
?>