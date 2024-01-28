<?php 
session_start();
include "../koneksi.php";
cekCookies();
cekSession();

$id = $_POST['id'];
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];

$file = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$tmp = explode('.', $file);
$tipe = end($tmp);


if (empty($file)) {
    $query = "UPDATE tb_upload
                SET judul_dokumen = '$judul',
                    keterangan = '$keterangan'
                WHERE id_upload = '$id'";
    
}else {
    $query = "SELECT * FROM tb_upload WHERE id_upload = '$id'";
    $data = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($data);
    unlink("ulpoad/" . $row['$nama_file']);

    $nama_file  = round(microtime(true)) . "." . $tipe;

    $query = "UPDATE tb_upload
                SET judul_dokumen = '$judul',
                    nama_file     = '$nama_file',
                    keterangan    = '$keterangan'
                WHERE id_upload = '$id'";

}

mysqli_query($koneksi, $query);
header("location:pesan.php");


?>