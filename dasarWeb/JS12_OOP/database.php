<?php
class Database
{
    private $host = "localhost";
    private $username = "postgres";
    private $password = "admin123";
    private $database = "web_db";
    private $port = "5433";
    public $conn;

    public function __construct()
    {
        $conn_string = "host=$this->host port=$this->port dbname=$this->database user=$this->username password=$this->password";
        $this->conn = pg_connect($conn_string);

        if (!$this->conn) {
            die("Connection failed: " . pg_last_error());
        }
    }
}
?>