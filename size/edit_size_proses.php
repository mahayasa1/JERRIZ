<?php
session_start();
include "koneksi.php";
cekCookies();
cekSession();
levelAdmin();

$id         = $_POST['id'];
$kd_size    = $_POST['kd_size'];
$width      = $_POST['width'];
$height     = $_POST['height'];

$query = "UPDATE tb_size
            SET kd_size = '$kd_size',
                width   = '$width',
                height  = '$height'
            WHERE id_size = '$id'";

mysqli_query($koneksi,$query);

header("location:size.php");




?>