<?php 

class Connection {
    protected $conn;

    public function connect() {
        return $this->conn = new PDO("mysql:host=localhost;dbname=mysqlDB", "root", "");
    }
}