<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    a.nav-link:hover{
        background-color: black;
        border-radius: 8px;
    }
    a.nav-link{
        border-radius: 8px;
    }
    h1{
        text-align: center;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="#">Pemrograman Web2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item ms-4 ">
          <a class="nav-link active" aria-current="page" href="tampil_nilai.php?nilai=AllNilai">Semua Nilai</a>
        </li>
        <li class="nav-item ms-2">
          <a class="nav-link active" href="tampil_nilai.php?nilai=A">Nilai A</a>
        </li>
        <li class="nav-item  ms-2">
          <a class="nav-link active"  href="tampil_nilai.php?nilai=B">Nilai B</a>
        </li>
        <li class="nav-item  ms-2">
          <a class="nav-link active" href="tampil_nilai.php?nilai=C">Nilai C</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Home Page</h1>
</body>
</html>