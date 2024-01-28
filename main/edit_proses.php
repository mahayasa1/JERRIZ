<?php 
session_start();
include "../koneksi.php";
cekCookies();
cekSession();
levelAdmin();

$id         = $_POST['id'];
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$pass       = md5($_POST['password']);
$level      = $_POST['level'];

$query = "UPDATE tb_admin
            SET nama     = '$nama',
                email    = '$email',
                password = '$pass',
                level    = '$level'
            WHERE id_admin = '$id'";
mysqli_query($koneksi, $query);

header("location:admin.php");

?>