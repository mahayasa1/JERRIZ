<?php
session_start();
include "../koneksi.php";
cekCookies();
cekSession();

$judul  = $_POST['judul'];
$keterangan = $_POST['keterangan'];

$file =  $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$tmp   = explode('.',$file);
$tipe = end($tmp);


$nama_file  = round(microtime(true)). "." . $tipe;

move_uploaded_file($file_tmp , $nama_file);

$query = "INSERT INTO tb_upload (judul_dokumen, nama_file, Keterangan)
            VALUES ('$judul', '$nama_file', '$keterangan')";
mysqli_query($koneksi, $query);

header("location:pesan.php");




?>