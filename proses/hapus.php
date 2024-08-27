<?php
    include "koneksi.php";
    $id = $_GET['id_daftar'];
    $query = mysqli_query($koneksi,"DELETE FROM daftar WHERE id_daftar = $id");
    if($query)
    {
        echo "<script>alert('Hapus Berhasil'); window.location.href='../tampil.php';</script>";
    }
    else {
        echo "<script>alert('Hapus Gagal'); window.location.href='../tampil.php';</script>";

    }
?>