<?php
include '../../model/koneksi_makanan.php';
$db = new database();
?>
<!doctype html>
<html lang="en">

<head>
  <title>HALAMAN ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DATA</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="tampilan_obat.php">DATA OBAT</a>
              </li>
              <li>
                <a href="tampilan_makanan.php">DATA MAKANAN</a>
              </li>
              <li>
                <a href="tampilan_minuman.php">DATA MINUMAN</a>
              </li>
              <li>
                <a href="tampilan_transaksi.php">DATA TRANSAKSI</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          
          <li>
            <a href="../OurTeam/index.html">Our Team</a>
          </li>
          <li>
            <a href="../SocialMedia/index.html">Social Media</a>
          </li>
        </ul>

        <div class="footer">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <script>
              document.write(new Date().getFullYear());
            </script>| Project Dari Kelompok 1 | 1 TI B <i class="icon-heart" aria-hidden="true"></i> | <a href="https://pcr.ac.id" target="_blank">Politeknik Caltex Riau</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../../login.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h2 class="mb-4">DATA MAKANAN</h2>
      <a href="../int_makanan.php">Input Data</a>
	    <table border="1">
      <table class="table table-bordered table-dark table-hover">
        <tr>
          <th>No</th>
          <th>Kode makanan</th>
          <th>Merk makanan</th>
          <th>Jenis makanan</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($db->tampil_data() as $data) {  ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['kode_makanan'] ?></td>
            <td><?php echo $data['merk_makanan'] ?></td>
            <td><?php echo $data['jenis_makanan'] ?></td>
            <td><?php echo $data['stok'] ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td>
              <a href="../edt_makanan.php?id=<?php echo $data['kode_makanan'] ?>&aksi=edit">Edit</a>
              <a href="../../controller/ps_makanan.php?id=<?php echo $data['kode_makanan'] ?>&aksi=hapus">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>