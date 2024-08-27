<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $keinginan = $_POST['keinginan'];
    $tanggal = $_POST['tanggal'];
    $jasa = $_POST['jasa'];

    $query = mysqli_query($koneksi,"INSERT INTO daftar VALUES ('','$nama','$jurusan','$keinginan','$tanggal','$jasa')");

    if($query){
        echo "<script>alert('input berhasil'); window.location.href='../tampil.php';</script>";
    }
    else{
        echo "<script>alert('input gagal'); window.location.href='../input.php';</script>";
    }

?>