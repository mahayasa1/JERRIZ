<?php
include "../koneksi.php";

$id               = $_POST['id'];
$price            = $_POST['price'];
$kd_size          = $_POST['kd_size'];
$nama_produk      = $_POST['nama_produk'];
$stok             = $_POST['stok'];
$query = "UPDATE tb_produk
            SET price            = '$price',
                stok             = '$stok',
                kd_size          = '$kd_size',
                nama_produk      = '$nama_produk'
            WHERE id_produk      = '$id'";

mysqli_query($koneksi, $query);

header("location: produk.php");

?>