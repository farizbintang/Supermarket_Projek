<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="libs/fonts/icomoon/style.css">

    <link rel="stylesheet" href="libs/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="libs/css/style.css">

    <title>Register</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('libs/images/bg_6.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Register <strong>Account</strong></h3>


                        <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

                        <div class="kotak_login">
                            <p class="tulisan_login">Silahkan Regis</p>

                            <form action="controller/proses.php?aksi=insert_user" method="post">
                                <div class="form-group first">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name ..">
                                </div>
                                <div class="form-group first">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username ..">
                                </div>
                                <div class="form-group last mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Password ..">
                                </div>
                                <div class="form-group first">
                                    <label>Level</label>
                                    <input type="text" name="level" class="form-control" placeholder="Level ..">
                                </div> <br>


                                </label>

                        </div>

                        <input type="submit" value="Regis" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="libs/js/jquery-3.3.1.min.js"></script>
    <script src="libs/js/popper.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
    <script src="libs/js/main.js"></script>
</body>

</html>