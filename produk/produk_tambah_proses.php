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
//         //   if($ukuran_gambar > 81920){ 
//         //       echo 'Ukuran gambar melebihi 80kb';
//         //   }else if ($width > "480" || $height > "640") {
//         //        echo 'Ukuran gambar harus 480x640';
//         //   }else{
//         //       if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                  
//                 $query = "INSERT INTO tb_produk (nama_produk, kd_size, price, stok)
//                 VALUES ('$nama_produk', '$kd_size', '$price', '$stok')";
//                 mysqli_query($koneksi, $query);
// //                   echo 'Simpan data berhasil';
// //               } else {
// //                   echo 'Simpan data gagal';
// //               }
// //         //   } 
//    }

$sumber = $_FILES['filegambar']['tmp_name'];

    $target = 'img/';

    $nama_gambar = $_FILES['filegambar']['name'];



$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if($pindah){

    $query = "INSERT INTO tb_produk (nama_produk,  kd_size, price, stok ,foto)
                VALUES ('$nama_produk', '$kd_size', '$price', '$stok','$nama_gambar')";

$hasil = mysqli_query($koneksi,$query);

}

if($hasil)

{

header("location:produk.php");

}

else{

    echo "Penyimpanan gagal";

}


// if (isset($_POST['kirim'])) {
//         //Cek apakah ada kiriman form dari method post
//         if ($_SERVER["REQUEST_METHOD"] == "POST") {

//             $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
//             $filegambar = $_FILES['filegambar']['name'];
//             $x = explode('.', $filegambar);
//             $ekstensi = strtolower(end($x));
//             $file_tmp = $_FILES['filegambar']['tmp_name'];

//             if (!empty($filegambar)){
//                 if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
//                     //Mengupload gambar
//                     move_uploaded_file($file_tmp, 'img/'.$filegambar);

//                     $query = "INSERT INTO tb_produk (nama_produk,  kd_size, price, stok ,foto)
//                               VALUES ('$nama_produk', '$kd_size', '$price', '$stok','$filegambar')";
//                     $data = mysqli_query($koneksi, $query);

//                     if ($data) {
//                         header("Location:produk.php?add=berhasil");
//                     }
//                     else {
//                         header("Location:produk.php?add=gagal");
//                     }
                    
//                 }
//             }
//         }

//     }
?>
