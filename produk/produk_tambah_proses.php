<?php
session_start();
include "../koneksi.php";
cekCookies();
cekSession();


$nama_produk     = $_POST["nama_produk"];
$kd_size         = $_POST["kd_size"]; 
$price           = $_POST["price"]; 
$stok            = $_POST["stok"];

$query = "INSERT INTO tb_produk (nama_produk, kd_size, price, stok)
            VALUES ('$nama_produk', '$kd_size', '$price', '$stok')";
mysqli_query($koneksi, $query);

header("location: produk.php");

?>