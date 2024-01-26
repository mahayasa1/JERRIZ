<?php 

    include "../koneksi.php"
 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIZE - 220030726</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- DataTables -->
  
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  </script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <!-- DataTables -->
</head>
  <body>
  
  <!-- Daftar Menu -->
  <?php include "menu.php" ?>
  <!-- Daftar Menu -->

    <div class="container">
        <br>
        <h3 class="text-center"> Halaman Size</h3>
        <br>
        <a href="tambah_size.php" class="btn btn-primary">Tambah</a> <br><br>
        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Size</th>
                <th>Width</th>
                <th>height</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $no = 1;
            $query = "SELECT * FROM tb_size";
            $data = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($data)) {
            ?>

            <tr>
                <td><?= $no++?></td>
                <td><?= $row['kd_size']?></td>
                <td><?= $row['width']?></td>
                <td><?= $row['height']?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id_size']?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id_size']?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Option</th>
            </tr>
        </tfoot>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

<link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
