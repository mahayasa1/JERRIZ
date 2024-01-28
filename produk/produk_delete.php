<?php

include "../koneksi.php";

$id     = $_GET['id'];

$query  = "DELETE FROM tb_produk WHERE id_produk = '$id'";
mysqli_query($koneksi, $query);

header("location:produk.php");

?>