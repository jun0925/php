<?php
define('DB_SERVER', "127.0.0.1");
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '111111');
define('DB_NAME', 'demo');
define('DB_PORT', '3307');

try{
    $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";port=".DB_PORT, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Colud not connect. " . $e->getMessage());
}
?>