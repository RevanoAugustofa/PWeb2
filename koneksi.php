<?php 

class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "pweb2";
    protected $koneksi;

    // constructor
    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        // Mengecek apakah koneksi berhasil
        if ($this->koneksi->connect_error) {
            die("Koneksi gagal: " . $this->koneksi->connect_error);
        } else {
            echo "";
        }

        return $this->koneksi;
    }
}
$cetak = new database();