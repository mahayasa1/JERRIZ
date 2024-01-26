<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - 220030726</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script>
        function peringatan (){

          alert("selamat belajar php");
        }
      </script>
  </head>
  <body>

  <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
  <div class="card-header">
    Login
  </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
          <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">password</label>
              <input type="password" class="form-control" name="password" id="password" required>
          </div>
      </li>
      <li class="list-group-item">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="admin.php" class="btn btn-primary" type="Submit" >Login</a>
          </div>
      </li>
    </ul>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>     