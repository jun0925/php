<?php 
$link = mysqli_connect("127.0.0.1", "root", "111111", "demo", "3307");

if($link === false){
    die("ERROR: Colud not connect. " . mysqli_connect_error());
}

$sql = "UPDATE persons SET email = 'peterparker_new@mail.com' WHERE id=1";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
}else{
    echo "ERROR: Colud not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>