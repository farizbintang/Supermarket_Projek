<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Pengawai Tambah Data</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../libsssss/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../libsssss/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Input Data Makanan</h2>
                                
								<p>Form Untuk Input Data Makanan</p>
							</div>
						</div>
						<form action="../controller/proses_makanan.php?aksi=tambah" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Kode Makanan</span>
										<input class="form-control" type="text" name="kode_makanan" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Merk Makanan</span>
										<input class="form-control" type="text" name="merk_makanan" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Jenis Makanan</span>
                                        <input class="form-control" type="text" name="jenis_makanan" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Stok</span>
										<input class="form-control" type="text" name="stok" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Harga</span>
								<input class="form-control" type="text" name="harga" required>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>