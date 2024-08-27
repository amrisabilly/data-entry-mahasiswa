<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page - LOGIN</title>
    <!-- Style Css -->
    <link rel="stylesheet" href="css/signupp.css">
    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-8 bg-gambar">
        <img src="asset/login/logo" alt="" style="width: 9em;position: absolute;left: 2em;">
        <h2>UM<span>RAH</span></h2>
        <h6>Universitas Maritim Raja Ali Haji didirikan atas keinginan segenap warga Provinsi Kepulauan Riau untuk memiliki Perguruan Tinggi Negeri yang akan menjadi tempat para pemuda dan pemudi Bumi segantang lada ini memperoleh pendidikan tinggi dan ditempa menjadi Pemimpin, Wirausahawan, dan Orang yang berguna bagi Kepri di masa depan.
            Setelah melalui rangkaian proses yang panjang dimulai dari terbit SK Mendiknas No. 124/D/O/2007 tentang izin berdirinya UMRAH hingga terbitnya Peraturan Presiden No. 53 Tahun 2011 tentang Pendirian UMRAH sebagai Perguruan tinggi negeri di Lingkungan Kementrian Pendidikan Nasional yang kini kembali kepada nama Kementrian Pendidikan dan Kebudayaan, maka resmilah UMRAH menyandang status sebagai perguruan tinggi Negeri di wilayah perbatasan Indonesia.</h6>
    </div>
    <div class="col-4 bg-input">
      <div class="title">
        <h2><span>Selamat Datang</span></h2>
        <p>Regitrasi Untuk Lanjut.</p> <hr style="width: 50%; color: #FFDE00;margin-top: -0.5em;">
      </div>
      <!-- Form Login -->
      <form action="proses/signup.php" method="POST">
      <div class="input">
        <div class="username">
            <label for="">Username</label><br>
            <input type="text" name="username">
        </div>
        <div class="email mt-3">
            <label for="">Email</label><br>
            <input type="email" name="email">
        </div>
        <div class="password">
            <label for="">Password</label><br>
            <input type="password" name="password">
        </div>
        <div class="button">
            <p>Sudah Punya Akun? <a href="login.php" style="text-decoration: none;color: #846265">Login</a></p>
            <button name="submit" type="submit">Regitrasi</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Link Js Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

