<?php
// Create connection

include_once 'psl-config.php';   // To edit connection edit pls-config file.

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);


// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


