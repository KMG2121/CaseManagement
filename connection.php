<?php
// File: /path/to/your/local/connection.php

$servername = "localhost";  // local server name
$username = "u109918981_Scorebook5734";  // your local db username
$password = "qV65fyEYreAnFi";  // your local db password
$dbname = "u109918981_CaseManagement";  // your local db name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
