<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'my_database';
    private $username = 'my_user';
    private $password = 'my_password';
    private $connection;

    // Establish a database connection
    public function connect() {
        $this->connection = null;
        try {
            $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo 'Connection error: ' . $exception->getMessage();
        }
        return $this->connection;
    }

    // Close the database connection
    public function close() {
        $this->connection = null;
    }
}

?>