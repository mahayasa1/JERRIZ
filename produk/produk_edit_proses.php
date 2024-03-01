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

// Cek apakah user ingin mengubah fotonya atau tidak

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :

    // Ambil data foto yang dipilih dari form

    $sumber = $_FILES['filegambar']['name'];

    $nama_gambar = $_FILES['filegambar']['tmp_name'];

    

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload

    $fotobaru = date('dmYHis').$sumber;

    

    // Set path folder tempat menyimpan fotonya

    $path = "img/".$fotobaru;



    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        // Query untuk menampilkan data user berdasarkan id_user yang dikirim

        $query = "SELECT * FROM tb_produk WHERE id_produk='$id'";

        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql



        // Cek apakah file gambar sebelumnya ada di folder foto

        if(is_file("img/".$data['foto'])) // Jika gambar ada

            unlink("img/".$data['foto']); // Hapus file gambar sebelumnya yang ada di folder images

        

        // Proses ubah data ke Database

        $query =  "UPDATE tb_produk
                SET price            = '$price',
                    stok             = '$stok',
                    kd_size          = '$kd_size',
                    nama_produk      = '$nama_produk',
                    foto             = '$fotobaru'
                WHERE id_produk      = '$id'";

        $sql = mysqli_query($koneksi,$query); // Eksekusi/ Jalankan query dari variabel $query



        if($sql){ // Cek jika proses simpan ke database sukses atau tidak

            // Jika Sukses, Lakukan :

            header("location: produk.php"); // Redirect ke halaman index.php

        }else{

            // Jika Gagal, Lakukan :

            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

            echo "<br><a href='produk.php'>Kembali Ke Form</a>";

        }

    }else{

        // Jika gambar gagal diupload, Lakukan :

        echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 

                location = 'produk.php'; 

                </script>";

    }

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :

    // Proses ubah data ke Database

    $query = "UPDATE tb_produk
                SET price            = '$price',
                    stok             = '$stok',
                    kd_size          = '$kd_size',
                    nama_produk      = '$nama_produk'
                WHERE id_produk      = '$id'";

    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query



    if($sql){ // Cek jika proses simpan ke database sukses atau tidak

        // Jika Sukses, Lakukan :

        header("location: produk.php"); // Redirect ke halaman index.php

    }else{

        // Jika Gagal, Lakukan :

        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

        echo "<br><a href='produk.php'>Kembali Ke Form</a>";

    }

}


// $filegambar = $_FILES['filegambar']['name'];
// $tmp = $_FILES['filegambar']['tmp_name'];

// if (empty($filegambar)) {
//     $query = "UPDATE tb_produk
//             SET price            = '$price',
//                 stok             = '$stok',
//                 kd_size          = '$kd_size',
//                 nama_produk      = '$nama_produk'
//             WHERE id_produk      = '$id'";

// mysqli_query($koneksi, $query);

// if ($query) {
//     header("location: produk.php");
// }else {
//     echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
//     echo "<br> <a href='produk_edit.php'>kembali ke form</a>";
// }

// }else {
//     $fotobaru = date('dmYHis').$filegambar;

//     $path = "img/".$fotobaru;

//     if (move_uploaded_file($tmp, $path)) {
//         $id     = $_GET['id'];
//         $query  ="SELECT foto FROM tb_produk WHERE id_produk = '$id'";
//         $data = mysqli_query($koneksi, $query);
//         $row = mysqli_fetch_assoc($data);


//     if (is_file("img/".$row['foto']))
//         unlink("img/".$row['foto']);
        
//         $query =  "UPDATE tb_produk
//             SET price            = '$price',
//                 stok             = '$stok',
//                 kd_size          = '$kd_size',
//                 nama_produk      = '$nama_produk',
//                 foto             = '$fotobaru'
//             WHERE id_produk      = '$id'";
            
//             mysqli_query($koneksi, $query);

//         if ($query) {
//             header("location:produk.php");
//         }else {
//             echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
//             echo "<br><a href='produk_edit.php'>Kembali Ke Form</a>";
//         }
//     }else {
//         echo "Maaf, Gambar gagal untuk diupload.";
//     echo "<br><a href='produk_edit.php'>Kembali Ke Form</a>";
//     }
// }


?>