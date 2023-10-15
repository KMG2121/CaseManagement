<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.php');
require_once(DB_CONNECTION_PATH);
require_once(DB_CLASS_PATH);

// Create a new Database object
$db = new Database();

include 'header.php'; ?>

    <!-- Your page-specific content here -->

<?php include 'footer.php'; ?>
