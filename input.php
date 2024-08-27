<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/input.css">
</head>
<body style="background-color: #f7f7f7;">
<nav class="navbar navbar-expand-lg bg" >
  <div class="container-fluid">
    <a class="navbar-brand logo d-flex" href="#"><img src="asset/bg-logo.png" alt="" width="50;"><p style="margin-top: 0.7em;margin-left: 1em;">UM<span>RAH</span></p></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 35em;gap: 4em">
        <li class="nav-item nav">
          <a class="nav-link active hvr" aria-current="page" href="index.php" style="color: #f7f7f7">Home</a>
        </li>
        <li class="nav-item nav">
          <a class="nav-link active hvr" aria-current="page" href="input.php" style="color: #f7f7f7">Input</a>
        </li>
        <li class="nav-item nav">
          <a class="nav-link active hvr" aria-current="page" href="tampil.php" style="color: #f7f7f7">Tampil</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
      <a href="logout.php" class="btn btn-outline-danger" type="submit" style="color: #846265">Logout</a>
      </form>
    </div>
  </div>
</nav>

<div class="card" style="background-color: #29313F;width: 40em;margin-left: 35em;margin-top: 3em;">
    <h2 class="ms-4 text-center" style="color: #f7f7f7;">Program Input Mahasiswa</h2>
</div>
<div class="card" style="background-color: #29313F;width: 40em;margin-left: 35em;margin-top: 2em;">
<form action="proses/input.php" method="POST">
        <div class="input">
        <div class="username">
            <label for="">Nama</label><br>
            <input type="text" name="nama" class="inputt">
        </div>
        <div class="password">
            <label for="">Jurusan</label><br>
            <input type="text" name="jurusan" class="inputt">
        </div>
        <div class="password">
            <label for="">keiginan</label><br>
            <input type="text" name="keinginan" class="inputt">
        </div>
        <div class="password">
            <label for="">Tanggal</label><br>
            <input type="date" name="tanggal" class="inputt">
        </div>
        <div>
            <label for="">Jalur</label><br>
            <div class="d-flex" style="gap: 3em;">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="jasa" id="exampleRadios1" value="SBMPTN">
            <label class="form-check-label" for="exampleRadios1">
            SBMPTN
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jasa" id="exampleRadios2" value="SNPTN">
            <label class="form-check-label" for="exampleRadios2">
            SNPTN
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jasa" id="exampleRadios3" value="MANDIRI">
            <label class="form-check-label" for="exampleRadios3">
            MANDIRI
            </label>
          </div>
            </div>
        </div>
        <div class="button">
            <button name="submit" type="submit">Input</button>
        </div>
        </div>
</form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>