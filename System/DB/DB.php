<?php

class Database
{
    private $host = "localhost";

    private $username = "root";

    private $password = "";

    private $database = "dynamic_portfolio";

    public $conn ;


    public function Database() 
    {

    $this->conn = new mysqli($this->host,$this->username,$this->$password,$database);
    if($this->conn->connect_error){
        die("Connected failed" . $this->conn->connect_error)
    }
    return $this->conn;
    }

}