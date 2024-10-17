<?php 
// membuat Class database
class database {
    // Properti untuk menyimpan informasi koneksi database
    private $host = "localhost";    // Host database
    private $username = "root";      // Username untuk login ke database
    private $password = "";           // Password untuk login ke database
    private $database = "pweb2";     // Nama database yang akan digunakan
    protected $koneksi;              // Properti untuk menyimpan koneksi database

    // Konstruktor untuk membuat koneksi saat objek dibuat
    public function __construct() {
        // Membuat koneksi baru ke database
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        // Mengecek apakah koneksi berhasil
        if ($this->koneksi->connect_error) {
            die("Koneksi gagal: " . $this->koneksi->connect_error); // Jika gagal, tampilkan pesan error
        } else {
            echo ""; // Kosongkan, tidak ada pesan jika koneksi berhasil
        }

        // Tidak perlu mengembalikan nilai di konstruktor
        return $this->koneksi; // Meskipun tidak perlu, tetapi ini bisa dihapus
    }
}

// Membuat objek baru dari kelas database
$cetak = new database(); // Ini akan memanggil konstruktor dan mencoba terhubung ke database
?>
