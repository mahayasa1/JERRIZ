<?php
include "main/koneksi.php";

$nama       = $_POST['nama'];
$nama       = $_POST['email'];
$nama       = $_POST['tgl_lahir'];
$nama       = $_POST['jenis_kelamin'];
$nama       = $_POST['prodi'];
$nama       = implode(",",$_POST['minat']);

$query = "INSERT INTO tb_mhs (nama_mhs, email, tgl_lahir, jenis_kelamin, prodi, minat)
        VALUES ('$nama','$email','$tgl_lahir','$jenis','$prodi','$minat')";
        mysqli_query($koneksi, $query);

        header("location: mhs.php");
?>