<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JERIZZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
  <body>
  
<!-- Daftar Menu -->      
<?php include "menu.php" ?>
<!-- Daftar Menu -->

<div class="container">
  <br>
  <svg xmlns="http://www.w3.org/2000/svg" width=100% height=50% viewBox="0 0 715.18 177.05"><defs><style>.cls-1{fill:#000000;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M323.9,52.5c22.45-.25,41.49,19.26,41.17,42.53a42,42,0,0,1-6.57,23,41.24,41.24,0,0,1-17.18,15.4L365.07,165H319.85l-20.51-27.46H261.42V165H219V52.5ZM261.42,85.41v19.17H313.2a8.81,8.81,0,0,0,6.57-2.76,9.66,9.66,0,0,0-6.57-16.41Z"/><path class="cls-1" d="M184.09,15.82c-.08,1-1,1.47-2.7,1.73-9.17,1.42-39.87-5-63.33,13-45.29,34.63-13.6,121.89-55.65,142.77-.92.46-12.52,6-25.68,2.76-8-2-15-6.87-20.6-12.94C2.51,148.38-3.3,126.63,1.88,121.91s17.78,12.35,35.46,9.48C66.81,126.6,91.51,69.23,79.16,43a23.77,23.77,0,0,0-3-4.84C68.86,29.05,56,28,47.17,26.89,42,26.23,38.24,25.55,38,23.16,37.16,16.48,64.76,5.21,94.21,1.45,141.17-4.55,184.65,9.59,184.09,15.82Z"/><path class="cls-1" d="M111.75,52.49c-4.29,5.57-10.18,15.58-13.92,42.68-2.28,16.52-1.89,20.16-3.9,35.27-.63,4.74-2.7,24.21-8.91,34.5l125.62.09V136.14l-85,0V121.74h85v-26h-85V81.3h85V52.5Z"/><path class="cls-1" d="M415.27,52.33V164.86H372.81V52.33Z"/><path class="cls-1" d="M424.23,88.17V52.5H565V88.17l-74.31,41.11H565V165H424.23V129.28L496,88.17Z"/><path class="cls-1" d="M574.41,88.42V52.75H715.18V88.42l-74.32,41.11h74.32v35.75H574.41V129.53l71.72-41.11Z"/></g></g></svg>
  <br>
  <br>
  <br>
  <br>
  <form action="tambah_size_proses.php" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
      <label for="kd_size" class="col-sm-2 col-form-label">Kode Size</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="kd_size" name="kd_size" required>
      </div>
    </div>
  <div class="mb-3 row">
    <label for="width" class="col-sm-2 col-form-label">Width</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="width" name="width" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="height" class="col-sm-2 col-form-label">Height</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="height" name="height" required>
    </div>
  </div>

    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
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