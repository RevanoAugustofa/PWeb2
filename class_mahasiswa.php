<?php 
include "koneksi.php";

class Mahasiswa extends database{
    
    public function semua(){
    $query = "SELECT * FROM mahasiswa";
    return   parent::__construct()->query($query);
    }

    public function mahasiswa(){

        $mhs = parent::__construct()->query("SELECT * FROM mahasiswa");
        ?>

        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telp</th>
        </tr>
        <?php
        foreach ($mhs as $a){
            $no = 1;
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?=$a["nim"]?></td>
            <td><?=$a["nama_mhs"]?></td>
            <td><?=$a["alamat"]?></td>
            <td><?=$a["email"]?></td>
            <td><?=$a["no_telp"]?></td>
        </tr>
        <?php
        }
    }
}