<?php
    include "koneksi.php";

    $id_daftar = $_POST['id_daftar'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $keinginan = $_POST['keinginan'];
    $tanggal = $_POST['tanggal'];
    $jasa= $_POST['jasa'];

    $query = mysqli_query($koneksi,"UPDATE daftar SET nama='$nama', jurusan='$jurusan', keinginan='$keinginan', tanggal='$tanggal', jasa='$jasa' WHERE id_daftar ='$id_daftar'");

    if($query){
        echo "<script>alert('Update berhasil'); window.location.href='../tampil.php';</script>";
    }
    else{
        echo "<script>alert('Update gagal'); window.location.href='../edit.php';</script>";

    }

?>