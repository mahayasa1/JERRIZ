<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_jerriz");

function cekSession() {
    if (!isset($_SESSION['id_admin'])) {
        header("location:index.php?pesan=login");
    }
}

function cekCookies() {
    if (!isset($_SESSION['id_admin'])) {
        header("location:index.php?pesan=login");
    }
}

function levelAdmin() {
    if ($_SESSION['level'] != 0) {
        header("location:beranda.php");
    }
}


?>