<?php 
$mysqli = new mysqli("127.0.0.1", "root", "111111", "demo", "3307");

if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->connect_error);
}

if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM countries WHERE name LIKE ?";

    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("s", $param_term);

        $param_term = $_REQUEST["term"] . '%';

        if($stmt->execute()){
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo "<p>". $row["name"] ."</p>";
                }
            }else{
                echo "<p>No matches found</p>";
            }
        }else{
            echo "ERROR: Colud not able to execute $sql. " . mysqli_error($link);
        }
    }

    $stmt->close();
}

$mysqli->close();
?>