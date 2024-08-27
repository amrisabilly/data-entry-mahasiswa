<?php
    require 'koneksi.php';

    
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' or password='$password'");
        $row = mysqli_fetch_assoc($hasil);
        if(mysqli_num_rows($hasil) > 0){
            if($password == $row["password"]){
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["username"] = $row["username"];
                header("Location: ../index.php");
            }
            else{
                echo "<script>alert('Wrong password'); window.location.href='../login.php';</script>";
            }
        }
        else{
            echo "<script>alert('User not registered'); window.location.href='../login.php';</script>";
        }
    }



?>