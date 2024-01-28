<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../beranda.php">JERIZZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="../beranda.php">Dashboard</a>
        </li>
        <?php if ($_SESSION['level'] == 0) {?>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li> 
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="../produk/produk.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../size/size.php">Size</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inbox.php">Inbox</a>
        </li>
      
      </ul>
      <div class="d-flex" role="search">
        <a class="btn btn btn-danger" onclick="return confirm('Yakin Ingin Logout?')" href="../logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>