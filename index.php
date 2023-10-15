<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.php');
$credentials = require_once(DB_CONNECTION_PATH);

// Create a new Database object with the credentials from connection.php
$db = new Database(
    $credentials['host'],
    $credentials['db_name'],
    $credentials['username'],
    $credentials['password']
);

<?php include 'header.php'; ?>

    <!-- Your page-specific content here -->

<?php include 'footer.php'; ?>
