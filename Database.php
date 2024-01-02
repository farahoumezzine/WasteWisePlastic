<?php
class Database {
   // Database configuration
        public $hostname = "localhost";
        public $username = "root";
        public $password = "";
        public $databasename = "WWP";
        public $conn;


    public function __construct() {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->databasename);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>
