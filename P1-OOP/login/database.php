<?php

class Database{

    private $host = 'localhost';
    private $dbname = 'login';
    private $username = 'root';
    private $password = '';

    public function connect() {
        // PDO connection string
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        
        try {
            // Create a new PDO instance
            $this->pdo = new PDO($dsn, $this->username, $this->password);
        
            // Set PDO attributes
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            echo "Connected successfully";
        } catch (PDOException $e) {
            // Handle connection errors
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>
