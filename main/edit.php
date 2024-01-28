<?php
session_start();
include "../koneksi.php";
cekSession();
cekCookies();
levelAdmin();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
  <body>
  
<!-- Daftar Menu -->      
<?php include "menu.php" ?>
<!-- Daftar Menu -->

<div class="container">
    <h3 class="text-center">Formulir Tambah Admin</h3>
    <br>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_admin WHERE id_admin = '$id'";
        $data = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($data);
    ?>
    <form action="edit_proses.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $row['nama']?> "required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" id="email" class="form-control" value="<?= $row['email']?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="level" class="vol-sm-2 col-form-label">Level User</label>
            <div class="col-sm-10">
                <select name="level" id="level" class="form-select" aria-label="Default select example" required>
                    <option value="" hidden>~ Select Level User ~</option>
                    <option value="0" <?= ($row['level'] == 0 ? "selected" : "")?>>Admin</option>
                    <option value="1" <?= ($row['level'] == 1 ? "selected" : "")?>>Pegawai</option>
                </select>
            </div>
        </div>
        <div class="col-sm-10">
            <input type="hidden" name="id" value="<?= $id ?>">
      <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
      <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
    </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

<link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
