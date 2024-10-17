# Pemrograman Web2
__TUGAS 2 Membuat tampilan berbasis OOP, dengan mengambil data dari database MySQL__
###  <u>Langkah 1</u>
### 1. Menggunakan _construct untuk menghubungkan ke database
```php
// Konstruktor untuk membuat koneksi saat objek dibuat
    public function __construct() {
        // Membuat koneksi baru ke database
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Tidak perlu mengembalikan nilai di konstruktor
        return $this->koneksi; // Meskipun tidak perlu, tetapi ini bisa dihapus
    }
```
- Kode ```$this->koneksi = new mysqli(...)``` membuat koneksi ke database dengan menggunakan properti kelas yang sudah didefinisikan. Jika koneksi berhasil, objek mysqli akan disimpan dalam properti $koneksi.
```php
 // Mengecek apakah koneksi berhasil
        if ($this->koneksi->connect_error) {
            die("Koneksi gagal: " . $this->koneksi->connect_error); // Jika gagal, tampilkan pesan error
        } else {
            echo ""; // Kosongkan, tidak ada pesan jika koneksi berhasil
        }
```
- Pengecekan Koneksi: Struktur ```if ($this->koneksi->connect_error)``` digunakan untuk memeriksa apakah ada kesalahan saat mencoba terhubung. Jika ada kesalahan, program akan menghentikan eksekusi dan menampilkan pesan error.

- Pesan Kosong: Pada bagian ```else```, tidak ada pesan yang ditampilkan jika koneksi berhasil. Ini bisa berguna jika Anda ingin menghindari output yang tidak perlu
### 2. Menerapkan enkapsulasi
```php
  // Properti untuk menyimpan informasi koneksi database
    private $host = "localhost";    // Host database
    private $username = "root";      // Username untuk login ke database
    private $password = "";           // Password untuk login ke database
    private $database = "pweb2";     // Nama database yang akan digunakan
```
- private ```$host```: Menyimpan nama host database. Akses dibatasi agar tidak bisa diubah dari luar kelas, menjaga keamanan koneksi.

- private ```$username```: Menyimpan username untuk mengakses database. Dengan private, username terlindungi dari modifikasi yang tidak sah.

- private ```$password```: Menyimpan password database. Pembatasan akses ini melindungi data sensitif dari akses tidak sah.

- private ```$database```: Menyimpan nama database yang digunakan. Data ini tetap aman karena tidak bisa diubah dari luar kelas.
### 3. Membuat kelas turunan menggunakan konsep pewarisan
```php
class database{
    ...
}
```
- ```Class database()``` yaitu Kelas Induk: Kelas ini mengatur koneksi ke database dan menyimpan informasi koneksi.
```php
abstract class nilai extends database{
    abstract public function getNilai();
}
```
- Kelas abstrak nilai mewarisi dari kelas database dan tidak dapat diinstansiasi, serta memiliki metode abstrak ```getNilai()``` yang wajib diimplementasikan oleh kelas turunan.
```php
<?php 

class nilaiA extends nilai{
    ...
}

class nilaiB extends nilai{
    ...
}

class nilaiC extends nilai{
    ...
}

class AllNilai extends nilai{
    ...
}
```
- Masing-masing kelas ini mengimplementasikan metode ```getNilai()``` untuk mengambil data dari tabel terkait nilaiA, nilaiB, dan nilaiC.
### 4. Menerapkan polimorfisme untuk setidaknya 2 peran sesuai dengan studi kasus
```php
    //
    public function getNilai(){
        $query = "SELECT * FROM nilai join mahasiswa on nilai.mahasiswa_id=mahasiswa.mahasiswa_id WHERE nilai_akhir between 80 and 100 ";
        return parent::__construct()->query($query);
    }
```
- mengambil data mahasiswa dengan nilai akhir antara 80 dan 100. menggunakan JOIN untuk mengaitkan tabel nilai dengan tabel mahasiswa, sehingga dapat menampilkan informasi mahasiswa yang memiliki nilai tersebut.

```php
    //
    public function getNilai(){
        $query = "SELECT * FROM nilai join mahasiswa on nilai.mahasiswa_id=mahasiswa.mahasiswa_id WHERE nilai_akhir between 65 and 79";
        return parent::__construct()->query($query);
    }
```
- mengambil data mahasiswa dengan nilai akhir antara 65 dan 79. menggunakan JOIN untuk mengaitkan tabel nilai dengan tabel mahasiswa, sehingga dapat menampilkan informasi mahasiswa yang memiliki nilai tersebut.

```php
    //
    public function getNilai(){
        $query = "SELECT * FROM nilai join mahasiswa on nilai.mahasiswa_id=mahasiswa.mahasiswa_id WHERE nilai_akhir between 0 and 64";
        return parent::__construct()->query($query);
    }
```
- mengambil data mahasiswa dengan nilai akhir antara 0 dan 64. menggunakan JOIN untuk mengaitkan tabel nilai dengan tabel mahasiswa, sehingga dapat menampilkan informasi mahasiswa yang memiliki nilai tersebut.

```php
    //
    public function getNilai(){
        $query = "SELECT * from nilai join mahasiswa on nilai.mahasiswa_id = mahasiswa.mahasiswa_id";
        return parent::__construct()->query($query);
    }
```
- mengambil semua data mahasiswa tanpa memfilter nilai akhir dan enggunakan JOIN untuk menampilkan semua informasi dari tabel nilai dan mahasiswa.

## Hasil Output :
### 1. Menampilkan semua data nilai
![alt text](/img/allNilai.png)
### 2. Menampilkan hanya data nilai A
![alt text](/img/nilaiA.png)
### 3. Menampilkan hanya data nilai B
![alt text](/img/nilaiB.png)
### 4. Menampilkan hanya data nilai C
![alt text](/img/nilaiC.png)
