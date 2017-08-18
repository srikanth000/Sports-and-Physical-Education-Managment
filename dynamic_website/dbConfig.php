<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '11189198';
$dbName = 'newdb';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection faied: " . $db->connect_error);
}
?>
