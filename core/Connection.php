<?php
class Connection {
    private $connection;

    public function __construct() {
        $config = require '../config/config.php';
        $dbConfig = $config['db'];

        $this->connection = new mysqli(
            $dbConfig['host'],
            $dbConfig['user'],
            $dbConfig['password'],
            $dbConfig['dbname']
        );

        // Kiểm tra kết nối
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection->close();
    }
}
