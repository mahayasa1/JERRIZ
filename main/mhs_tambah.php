<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir - 220030726</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
  <body>
  
<!-- Daftar Menu -->      
<?php include "menu.php" ?>
<!-- Daftar Menu -->

    <div class="container">
        <br>
        <h3 class="text-center"> Formulir Tambah Mahasiswa</h3>
        <br>
        <form action="mhs_tambah_proses" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Tgl_lahir" class="col-sm-2 col-form-label">Tanggal lahir Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="Tgl_lahir" name="Tgl_lahir" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="L" value="L" required>
                        <label class="form-check-label" for="L">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="P" value="P" >
                        <label class="form-check-label" for="P">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Tgl_lahir" class="col-sm-2 col-form-label">Tanggal lahir Mahasiswa</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="prodi" name="prodi" required>
                        <option value="">- Pilihan Prodi -</option>
                        <option value="1">Sistem Informasi</option>
                        <option value="2">Sistem Komputer</option>
                        <option value="3">Teknologi Informasi</option>
                        <option value="4">Manajemen Informasi</option>
                        <option value="5">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Minat</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="Videography" id="Videography">
                        <label class="form-check-label" for="Videography">
                            Videography
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="Graphic_Designer" id="Graphic_Designer">
                        <label class="form-check-label" for="Graphic_Designer">
                            Graphic Designer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="Programming" id="Programming">
                        <label class="form-check-label" for="Programming">
                            Programming
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="Gaming" id="Gaming">
                        <label class="form-check-label" for="Gaming">
                            Gaming
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="Web_Designer" id="Web_Designer">
                        <label class="form-check-label" for="Web_Designer">
                            Web Designer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="UI_UX" id="UI_UX">
                        <label class="form-check-label" for="UI_UX">
                            UI/UX
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                    <button type="Reset" class="btn btn-secondary">Reset</button>
                </div>
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
