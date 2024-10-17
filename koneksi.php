<?php 

class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "pweb2";

    // constructor
    public function __construct(){
        $koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        return $koneksi;
    }
}

