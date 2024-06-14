<?php
class DB{
    public $servername = "localhost";
    public $username = "nowo_real_now";
    public $password = "now";
    public $dbname = "nowo_real_now";
    public $conn;
    function __construct(){
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
    }
    function getConnection(){
       return $this->conn;
    }
}
?>