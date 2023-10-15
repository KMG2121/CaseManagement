<?php
// config.php

// Determine the environment: local or server
$environment = (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) ? 'local' : 'server';

// Define the root directory of project
define('PROJECT_ROOT', __DIR__);

// Path to connection.php file
if ($environment == 'local') {
    // Local path
    define('DB_CONNECTION_PATH', '/Applications/XAMPP/xamppfiles/htdocs/CaseManagement/connection.php');
} else {
    // Server path
    define('DB_CONNECTION_PATH', '/u109918981.kenneth-graham.com@casedx.com/public_html/CaseManagement/database.php/connection.php');
}

// Path to Database class file
define('DB_CLASS_PATH',  'u109918981.kenneth-graham.com@casedx.com/public_html/CaseManagement/database.php');

// Other configuration settings
// ...

?>
