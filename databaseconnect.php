<?php
require_once 'pdoconfig.php';
 
try {
    $conn = new PDO("mysql:host=$tandm;dbname=$tandm_db", $pdoconfig['username'], $pdoconfig['password']);
    echo "Connected to $dbname at $tandm successfully.";

} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>