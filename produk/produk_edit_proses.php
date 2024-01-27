<?php
include "../koneksi.php";

$id               = $_POST['id'];
$kd_produk        = $_POST['kd_produk'];
$nama_produk      = $_POST['nama_produk'];
$stok             = $_POST['stok'];
$query = "UPDATE tb_produk
            SET kd_produk        = '$kd_produk',
                stok             = '$stok',
                nama_produk      = '$nama_produk'
            WHERE id_produk      = '$id'";

mysqli_query($koneksi, $query);

header("location: produk.php");

?>