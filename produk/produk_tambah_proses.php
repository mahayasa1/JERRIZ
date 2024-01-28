<?php
session_start();
include "../koneksi.php";
cekCookies();
cekSession();


$nama_produk     = $_POST["nama_produk"];
$kd_size         = $_POST["kd_size"]; 
$price           = $_POST["price"]; 
$stok            = $_POST["stok"];

// if (isset($_POST['kirim'])) {
//     //buat folder bernama gambar
//     $tempdir = "img/"; 
//           if (!file_exists($tempdir))
//           mkdir($tempdir,0755); 
//           //gambar akan di simpan di folder gambar
//           $target_path = $tempdir . basename($_FILES['filegambar']['name']);
  
//           //nama gambar
//           $nama_gambar=$_FILES['filegambar']['name'];
//           //ukuran gambar
//           $ukuran_gambar = $_FILES['filegambar']['size']; 
  
//           $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
//           //lebar gambar
//           $width = $fileinfo[0];
//           //tinggi gambar
//           $height = $fileinfo[1]; 
//           if($ukuran_gambar > 81920){ 
//               echo 'Ukuran gambar melebihi 80kb';
//           }else if ($width > "480" || $height > "640") {
//                echo 'Ukuran gambar harus 480x640';
//           }else{
//               if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                  
                $query = "INSERT INTO tb_produk (nama_produk, kd_size, price, stok)
                VALUES ('$nama_produk', '$kd_size', '$price', '$stok')";
                mysqli_query($koneksi, $query);
//                   echo 'Simpan data berhasil';
//               } else {
//                   echo 'Simpan data gagal';
//               }
//           } 
//    }

header("location: produk.php");

?>