# CaseManagement
Web App for tracking legal cases


## Database Class

The `Database` class provides basic functionality for interacting with a MySQL database. It's designed to encapsulate the database connection and basic CRUD (Create, Read, Update, Delete) operations.

### Usage

Include the `Database` class and the `connection.php` file in your PHP script, then create a new instance of the `Database` class:

```php
require_once('/home/u109918981/domains/kenneth-graham.com/connection.php');
require_once('/path/to/Database.php');
$db = new Database();
