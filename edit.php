<?php
    include 'proses/koneksi.php';

    $id = $_GET['id_daftar'];
    $query = mysqli_query($koneksi,"SELECT * FROM daftar WHERE id_daftar = '$id'");
    $data = mysqli_fetch_assoc($query);

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
    <title>Edit - PAGE</title>
    <link rel="stylesheet" href="css/editt.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="card" style="background-color: #29313F;width: 40em;margin-left: 35em;margin-top: 3em;">
    <h2 class="ms-4 text-center" style="color: #f7f7f7;">Program Edit Data Mahasiswa</h2>
</div>
<div class="card" style="background-color: #29313F;width: 40em;margin-left: 35em;margin-top: 2em;">
<form action="proses/edit.php" method="POST">
    <input type="hidden" value="<?php echo $data["id_daftar"] ?>" name="id_daftar">
        <div class="input">
        <div class="username">
            <label for="">Nama</label><br>
            <input type="text" name="nama" class="inputt" value= "<?php echo $data["nama"];?>">
        </div>
        <div class="password">
            <label for="">Jurusan</label><br>
            <input type="text" name="jurusan" class="inputt" value= "<?php echo $data["jurusan"];?>">
        </div>
        <div class="password">
            <label for="">keiginan</label><br>
            <input type="text" name="keinginan" class="inputt" value= "<?php echo $data["keinginan"];?>">
        </div>
        <div class="password">
            <label for="">Tanggal</label><br>
            <input type="date" name="tanggal" class="inputt" value= "<?php echo $data["tanggal"];?>">
        </div>
        <div>
            <label for="">Jalur</label><br>
            <div class="d-flex" style="gap: 3em;">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="jasa" id="exampleRadios1" value="SBMPTN"  <?php echo ($data['jasa'] == 'SBMPTN') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="exampleRadios1">
            SBMPTN
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jasa" id="exampleRadios2" value="SNPTN" <?php echo ($data['jasa'] == 'SNPTN') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="exampleRadios2">
            SNPTN
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jasa" id="exampleRadios3" value="MANDIRI" <?php echo ($data['jasa'] == 'MANDIRI') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="exampleRadios3">
            MANDIRI
            </label>
          </div>
            </div>
        </div>
        <div class="button">
            <button name="submit" type="submit">Upload</button>
        </div>
        </div>
</form>
</div>


<script>
      feather.replace();
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

