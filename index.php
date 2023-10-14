<?php 
// Include configuration and database files
require_once('config.php');
require_once(DB_CONNECTION_PATH);
require_once(DB_CLASS_PATH);

// Create a new Database object
$db = new Database();
?>

<?php include 'header.php'; ?>

    <!-- Your page-specific content here -->

<?php include 'footer.php'; ?>
