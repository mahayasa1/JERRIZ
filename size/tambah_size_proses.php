<?php
session_start();
include "koneksi.php";
cekCookies();
cekSession();
levelAdmin();

$kd_size    = $_POST['$kd_size'];
$width      = $_POST['width'];
$height     = $_POST['$height'];

$query = "INSERT INTO tb_size(kd_size, width, height)
            VALUES ('$kd_size', '$width', '$height')";

mysqli_query($koneksi, $query);

header("location:size.php");

?>