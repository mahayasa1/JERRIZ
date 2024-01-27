<?php
include "../koneksi.php";

$price           = $_POST["price"]; 
$nama_produk     = $_POST["nama_produk"];
$stok            = $_POST["stok"];

$query = "INSERT INTO tb_produk (price, nama_produk, stok)
            VALUES ('$price', '$nama_produk', '$stok')";
mysqli_query($koneksi, $query);

header("location: produk.php");

?>