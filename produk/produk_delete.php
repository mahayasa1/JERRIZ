<?php

include "../koneksi.php";

$id     = $_GET['ID'];

$query  = "DELETE FROM tb_produk WHERE id_produk = '$id'";
mysqli_query($koneksi, $query);

header("location:produk.php");

?>