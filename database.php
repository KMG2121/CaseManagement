<?php
// Database.php

// Define the Database class
class Database {
    // Declare class properties for database credentials and connection object
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $conn;

    // Constructor method to establish database connection
    public function __construct($host, $db_name, $username, $password) {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;

        // Try to establish a database connection
        try {
            // Create a new PDO object for database connection
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            // Set error mode to exception to catch and handle exceptions
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            // Output connection errors
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Method to execute SELECT queries
    public function select($query, $params = []) {
        try {
            // Prepare the SQL query
            $stmt = $this->conn->prepare($query);
            // Execute the query with parameters
            $stmt->execute($params);
            // Fetch all results as an associative array and return them
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            // Output query errors
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to execute INSERT queries
    public function insert($table, $data) {
        try {
            // Prepare a string of field names and a string of corresponding named parameters
            $fields = implode(',', array_keys($data));
            $values = ':' . implode(', :', array_keys($data));
            // Prepare the SQL query
            $stmt = $this->conn->prepare("INSERT INTO $table ($fields) VALUES ($values)");
            // Execute the query with data
            $stmt->execute($data);
        } catch(PDOException $e) {
            // Output query errors
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to execute UPDATE queries
    public function update($table, $data, $where) {
        try {
            // Prepare a string of field=value pairs
            $fieldValue = '';
            foreach ($data as $key => $value) {
                $fieldValue .= "$key = :$key, ";
            }
            $fieldValue = rtrim($fieldValue, ', ');
            // Prepare the SQL query
            $stmt = $this->conn->prepare("UPDATE $table SET $fieldValue WHERE $where");
            // Execute the query with data
            $stmt->execute($data);
        } catch(PDOException $e) {
            // Output query errors
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to execute DELETE queries
    public function delete($table, $where) {
        try {
            // Prepare the SQL query
            $stmt = $this->conn->prepare("DELETE FROM $table WHERE $where");
            // Execute the query
            $stmt->execute();
        } catch(PDOException $e) {
            // Output query errors
            echo "Error: " . $e->getMessage();
        }
    }

    // Destructor method to close database connection
    public function __destruct() {
        // Set connection object to null to close the connection
        $this->conn = null;
    }
}
?>
