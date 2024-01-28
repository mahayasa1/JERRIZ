<?php
session_start();
include "../koneksi.php";
cekCookies();
cekSession();

$id = $_GET['id'];

$query = "DELETE FROM tb_size WHERE id_size = '$id'";
mysqli_query($koneksi, $query);

header("location:size.php");


?>