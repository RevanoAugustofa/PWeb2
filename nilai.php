<?php 
include "nilai.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    h1,p{
        text-align: center;
        padding-top: 30px;
    }
    a.nav-link:hover{
        background-color: black;
        border-radius: 8px;
    }
    a.nav-link{
        border-radius: 8px;
    }
    .center{
    margin-left: 140px;
    margin-right: 140px;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="home.php">Pemrograman Web2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item ms-4 ">
          <a class="nav-link active" aria-current="page" href="class_nilai.php?nilai=AllNilai">Semua Nilai</a>
        </li>
        <li class="nav-item ms-2">
          <a class="nav-link active" href="class_nilai.php?nilai=A">Nilai A</a>
        </li>
        <li class="nav-item  ms-2">
          <a class="nav-link active"  href="class_nilai.php?nilai=B">Nilai B</a>
        </li>
        <li class="nav-item  ms-2">
          <a class="nav-link active" href="class_nilai.php?nilai=C">Nilai C</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
if($_GET["nilai"]=="A"){
    $nilai = new nilaiA();
    echo "<h1> Menampilkan Keseluruhan Nilai A </h1>";
    echo "<p>Nilai A diberikan untuk nilai akhir yang berada dalam rentang 80 hingga 100</p> ";
}else if ($_GET["nilai"]=="B"){
    $nilai= new nilaiB();
    echo "<h1> Menampilkan Keseluruhan Nilai B </h1>";
    echo "<p>Nilai B diberikan untuk nilai akhir yang berada dalam rentang 65 hingga 79</p> ";
}else if ($_GET["nilai"]=="C"){
    $nilai= new nilaiC();
    echo "<h1> Menampilkan Keseluruhan Nilai C </h1>";
    echo "<p>Nilai C diberikan untuk nilai akhir yang berada dalam rentang 0 hingga 64</p> ";
}else{
    $nilai = new AllNilai();
    echo "<h1> Menampilkan Keseluruhan Nilai </h1>";
}

$z = $nilai->getNilai();
?>
<div class="center">
  <table class="table table-striped table-hover text-center">
    <tr>
        <th>ID</th>
        <th>ID Mahasiswa</th>
        <th>ID Matkul</th>
        <th>Nilai</th>
        <th>Nilai Akhir</th>
    </tr>
    </thead>
    <?php 
    foreach ($z as $a){  
    $no= 1;
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?=$a["id_mahasiswa"]?></td> 
        <!-- // gantii -->
        <td><?=$a["id_matkul"]?></td>
        <td><?=$a["nilai"]?></td>
        <td><?=$a["nilai_akhir"]?></td>
    </tr>
    <?php }?>
  </table> 
  </div>  
</body>
</html>