<?php 

class database{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "pweb2";

    // constructor
    public function __construct(){
        $koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        return $koneksi;
    }
}

