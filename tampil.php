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
    <title>Tampil - PAGE</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/tampill.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

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

<div class="container" style="margin-top: 5em;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Keinginan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jalur</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
    include "proses/koneksi.php";
    $no = 1;
    $query = mysqli_query($koneksi,"SELECT * FROM daftar");
    while($data = mysqli_fetch_array($query))
    {?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no ?></th>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['jurusan']; ?></td>
      <td><?= $data['keinginan']; ?></td>
      <td><?= $data['tanggal']; ?></td>
      <td><?= $data['jasa']; ?></td>
      <td class="d-flex" style="gap: 2em">
       <a href="edit.php?id_daftar=<?php echo $data['id_daftar'];?>"><i data-feather="edit" style="color: #FFDE00;"></i></a>
       <a href="proses/hapus.php?id_daftar=<?php echo $data['id_daftar'];?>"><i data-feather="trash-2" style="color: red;"></i></a>
    </td>
    </tr>
  </tbody>
  <?php
$no++;}
?>
</table>
</div>
<script>
      feather.replace();
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>