<?php
// Include the connection.php file
include '/home/Scorebook5734/connection.php';

// Check if the $conn object is set and not null
if (isset($conn) && $conn) {
    echo "Connection successful.";
} else {
    echo "Connection failed.";
}
?>
