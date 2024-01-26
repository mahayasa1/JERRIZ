<?php
include "main/koneksi.php";

$price           = $_POST["price"]; 
$nama_produk          = $_POST["nama_produk"];

$query = "INSERT INTO tb_produk (price, nama_produk)
            VALUES ('$price', '$nama_produk')";
mysqli_query($koneksi, $query);

header("location: produk.php");

?>