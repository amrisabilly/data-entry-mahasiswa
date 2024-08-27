<?php
    require 'koneksi.php';

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $duplicate = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('username sudah ada'); </script>";
        }
        $query = "INSERT INTO user VALUES('','$username','$email','$password')";
        mysqli_query($koneksi,$query);
        echo "<script>alert('Buat akun sukses'); window.location.href='../login.php';</script>";
    }
?>