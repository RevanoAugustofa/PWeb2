<?php 
include "koneksi.php";

abstract class nilai extends database{
    abstract public function getNilai();
}

class nilaiA extends nilai{
    public function getNilai(){
        $query = "SELECT * FROM nilai join mahasiswa on nilai.mahasiswa_id=mahasiswa.mahasiswa_id WHERE nilai_akhir between 80 and 100 ";
        return parent::__construct()->query($query);
    }
}

class nilaiB extends nilai{
    public function getNilai(){
        $query = "SELECT * FROM nilai join mahasiswa on nilai.mahasiswa_id=mahasiswa.mahasiswa_id WHERE nilai_akhir between 65 and 79";
        return parent::__construct()->query($query);
    }
}

class nilaiC extends nilai{
    public function getNilai(){
        $query = "SELECT * FROM nilai join mahasiswa on nilai.mahasiswa_id=mahasiswa.mahasiswa_id WHERE nilai_akhir between 0 and 64";
        return parent::__construct()->query($query);
    }
}

class AllNilai extends nilai{
    public function getNilai(){
        $query = "SELECT * from nilai join mahasiswa on nilai.mahasiswa_id = mahasiswa.mahasiswa_id";
        return parent::__construct()->query($query);
    }
}
//