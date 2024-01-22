<?php
session_start();
include "koneksi.php";
cekCookies();
cekSession();
levelAdmin();


$nama   = $_POST['$nama'];
$email  = $_POST['$email'];
$pass   = md5($_POST['password']);
$level   = $_POST['level'];

$query = "INSERT INTO tb_admin (email, nama, password, level)
            VALUES('$nama', '$email', '$pass','$level')";
mysqli_query($koneksi, $query);

header("location:admin.php");
?>