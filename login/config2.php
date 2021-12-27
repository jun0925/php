<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '111111');
define('DB_NAME', 'demo');
define('DB_PORT', '3307');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if($mysqli === false){
    die("ERROR: Colud not connect. " . $mysqli->connect_error);
}
?>