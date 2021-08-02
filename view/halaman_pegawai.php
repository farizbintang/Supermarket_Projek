<?php
include '../model/koneksi_makanan.php';
$db = new database();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="../libsss/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../libsss/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../libsss/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../libsss/css/style.css">

  <title>Website Menu #6</title>
</head>

<body>
  <?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
  }


  ?>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <header class="site-navbar site-navbar-target py-4" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3 ml-auto text-right order-2">
          <div class="site-logo">
            <a href="index.html" class="font-weight-bold text-white">Brand</a>
          </div>
        </div>

        <div class="col-9 order-1 text-left mr-auto">


          <span class="d-inline-block d-lg-block"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>

          <div class="limiter">
            <div class="container-table100">
              <div class="wrap-table100">
                <div class="table100">
                  <table border="1">
                    <tr>
                      <th>No.</th>
                      <th>Kode Makanan</th>
                      <th>Merk Makanan</th>
                      <th>Jenis Makanan</th>
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
                          <a href="edit_makanan.php?id=<?php echo $data['kode_makanan'] ?>&aksi=edit">Edit</a>
                          <a href="../controller/proses_makanan.php?id=<?php echo $data['kode_makanan'] ?>&aksi=hapus">Hapus</a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li class="active"><a href="dashboard.php" class="nav-link">Home</a></li>
              <li><a href="index_makanan.php" class="nav-link">Data Makanan</a></li>
              <li><a href="index_minuman.php" class="nav-link">Data Minuman</a></li>
              <li><a href="index_obat.php" class="nav-link">Data Obat</a></li>

            </ul>
          </nav>
        </div>


      </div>
    </div>

  </header>

  <div class="hero" style="background-image: url('../libsss/images/hero_1.jpg');"></div>



  <script src="../libsss/js/jquery-3.3.1.min.js"></script>
  <script src="../libsss/js/popper.min.js"></script>
  <script src="../libsss/js/bootstrap.min.js"></script>
  <script src="../libsss/js/jquery.sticky.js"></script>
  <script src="../libsss/js/main.js"></script>
</body>


<br />
<br />


</body>

</html>