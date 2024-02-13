<?php
session_start();
include "../koneksi.php";
cekSession();
cekCookies();

$id               = $_POST['id'];
$price            = $_POST['price'];
$kd_size          = $_POST['kd_size'];
$nama_produk      = $_POST['nama_produk'];
$stok             = $_POST['stok'];

$filegambar = $_FILES['filegambar']['name'];
$tmp = $_FILES['filegambar']['tmp_name'];

if (empty($filegambar)) {
    $query = "UPDATE tb_produk
            SET price            = '$price',
                stok             = '$stok',
                kd_size          = '$kd_size',
                nama_produk      = '$nama_produk'
            WHERE id_produk      = '$id'";

mysqli_query($koneksi, $query);

if ($query) {
    header("location: produk.php");
}else {
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br> <a href='produk_edit.php'>kembali ke form</a>";
}

}else {
    $fotobaru = date('dmYHis').$filegambar;

    $path = "img/".$fotobaru;

    if (move_uploaded_file($tmp, $path)) {
        $id     = $_GET['id'];
        $query  ="SELECT foto FROM tb_produk WHERE id_produk = '$id'";
        $data = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($data);


    if (is_file("img/".$row['foto']))
        unlink("img/".$row['foto']);
        
        $query =  "UPDATE tb_produk
            SET price            = '$price',
                stok             = '$stok',
                kd_size          = '$kd_size',
                nama_produk      = '$nama_produk',
                foto             = '$fotobaru'
            WHERE id_produk      = '$id'";
            
            mysqli_query($koneksi, $query);

        if ($query) {
            header("location:produk.php");
        }else {
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='produk_edit.php'>Kembali Ke Form</a>";
        }
    }else {
        echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='produk_edit.php'>Kembali Ke Form</a>";
    }
}


?>