<?php
session_start();
class Connection{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $db_name = "management_traines";
    
    public $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

}
