<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page - LOGIN</title>
    <!-- Style Css -->
    <link rel="stylesheet" href="css/loginn.css">
    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-8 bg-gambar">
        <h2>UM<span>RAH</span></h2>
        <h6>Universitas Maritim Ali Haji</h6>
    </div>
    <div class="col-4 bg-input">
      <div class="title">
        <h2><span>Selamat Datang</span></h2>
        <p>Login Untuk Lanjut.</p> <hr style="width: 50%; color: #FFDE00;margin-top: -0.5em;">
      </div>
      <!-- Form Login -->
      <form action="proses/login.php" method="POST">
      <div class="input">
        <div class="username">
            <label for="">Username</label><br>
            <input type="text" name="username">
        </div>
        <div class="password">
            <label for="">Password</label><br>
            <input type="password" name="password">
        </div>
        <div class="button">
            <p>Belum Punya Akun? <a href="signup.php" style="text-decoration: none;color: #846265">Sign Up</a></p>
            <button name="submit" type="submit">Login</button>
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

