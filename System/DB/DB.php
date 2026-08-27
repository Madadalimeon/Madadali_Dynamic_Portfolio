<?php

class Database
{
    private $host = HOST;

    private $username = USERNAME;

    private $password = "";

    private $database = DATABASE;

    public $conn ;


    public function Database() 
    {

    $this->conn = new mysqli($this->host,$this->username,$this->$password,$database);

    if($this->conn->connect_error){

        die("Connected failed" . $this->conn->connect_error);

    }
    
    return $this->conn;
    }

}