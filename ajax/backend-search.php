<?php 
$link = mysqli_connect("127.0.0.1", "root", "111111", "demo", "3307");

if($link === false){
    die("ERROR: Colud not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST['term'])){
    $sql = "SELECT * FROM countries WHERE name LIKE ?";

    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        $param_term = $_REQUEST['term'] . '%';

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>".$row['name']."</p>";
                }
            }else{
                echo "<p>No matches found</p>";
            }
        }else{
            echo "ERROR: Colud not able to execute $sql. " . mysqli_error($link);
        }
    }
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($link);
?>