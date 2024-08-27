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
    <title>Index - PAGE</title>
    <link rel="stylesheet" href="css/indexx.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #030304;">
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


<div class="hero">
    <h1>UM<span>RAH</span></h1>
    <h3>Universitas Maritim Ali Haji</h3>
</div>

<div class="container">
  <h2 class="text">Tentang Kami</h2>
  <div class="row" style="margin-top: 6em;">
    <div class="col-4 gambar">

  </div>
    <div class="col-8">
      <p class="about">Universitas Maritim Raja Ali Haji didirikan atas keinginan segenap warga Provinsi Kepulauan Riau untuk memiliki Perguruan Tinggi Negeri yang akan menjadi tempat para pemuda dan pemudi Bumi segantang lada ini memperoleh pendidikan tinggi dan ditempa menjadi Pemimpin, Wirausahawan, dan Orang yang berguna bagi Kepri di masa depan.

Setelah melalui rangkaian proses yang panjang dimulai dari terbit SK Mendiknas No. 124/D/O/2007 tentang izin berdirinya UMRAH hingga terbitnya Peraturan Presiden No. 53 Tahun 2011 tentang Pendirian UMRAH sebagai Perguruan tinggi negeri di Lingkungan Kementrian Pendidikan Nasional yang kini kembali kepada nama Kementrian Pendidikan dan Kebudayaan, maka resmilah UMRAH menyandang status sebagai perguruan tinggi Negeri di wilayah perbatasan Indonesia.

UMRAH diawal berdirinya merupakan penggabungan dari STISIPOL Raja Haji dan Politeknik Batam, dengan ditambah beberapa program studi baru. Kemudian STISIPOL Raja Haji dan Politeknik Batam Memutuskan untuk berdiri kembali sebagai PT mandiri. 9 Program Studi strata Satu diawal berdirinya tersebar di lima Fakultas.

UMRAH juga memiliki Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM) sebagai wadah untuk mengelola kegiatan penelitian dan pengabdian kepada masyarakat.</p>
    </div>
  </div>
</div>


<div class="container" id="berita">
<h2 class="text">Berita</h2>
  <div class="row" style="margin-top: 7em;">
    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="card" style="width: 22rem;background-color: #29313F">
        <img src="asset/berita1.jpg" class="card-img-top" alt="...">
          <div class="card-body" style="color:#f7f7f7">
            <h5 class="card-title">Mahasiswa</h5>
              <p class="card-text">Mahasiswi UMRAH Tanjungpinang Raih Juara Internasional dalam Swift Student Challenge yang Diselenggarakan Apple</p>
              <a href="#berita" class="btn btn-primary">Berita</a>
          </div>
        </div>
      </div>
    <div class="col-4 d-flex align-items-center justify-content-center">
        <div class="card" style="width: 22rem;background-color: #29313F">
          <img src="asset/berita3.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="color:#f7f7f7">
            <h5 class="card-title">Pekan Baru SATGAS</h5>
            <p class="card-text">SATGAS PPKS UMRAH dan UNRI Gelar Diskusi Bertukar Pengalaman.</p>
            <a href="#berita" class="btn btn-primary">Berita</a>
        </div>
      </div>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-center">
        <div class="card" style="width: 22rem;background-color: #29313F">
          <img src="asset/berita3.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="color:#f7f7f7">
              <h5 class="card-title">Pleno AFEBI XXI</h5>
              <p class="card-text">UMRAH Jadi Tuan Rumah Sidang Pleno AFEBI XXI di Batam.</p>
              <a href="#berita" class="btn btn-primary">Berita</a>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="footer" style="background-color: #29313F;height: 10em;margin-top: 5em" >
        <div class="text-small d-flex align-items-center justify-content-center">
          <div class="mb-1" style="color: #f7f7f7;margin-top: 2em;font-size: 22px"> Created by Oktriadi.| &copy; 2024</div>
        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>