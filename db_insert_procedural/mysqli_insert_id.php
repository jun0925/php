<?php
/**
 * 마지막으로 삽입된 행의 ID를 얻는 방법
 */
$link = mysqli_connect("127.0.0.1", "root", "111111", "demo", "3307");

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
if(mysqli_query($link, $sql)){
    // Obtain last inserted id
    $last_id = mysqli_insert_id($link);
    echo "Records inseted successfully. Last inseted ID id: " . $last_id;
}else{
    echo "ERROR: Colud not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>