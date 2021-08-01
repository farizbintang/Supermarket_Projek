<?php 

	class database{

		var $host = "localhost";  
		var $uname = "root";
		var $pass = "";
		var $db = "bpwl_supermarket";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			mysqli_select_db($this->con, $this->db);
		}

		function tampil_data(){
			$data = mysqli_query($this->con, "select * from makanan");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($kode_makanan,$merk_makanan, $jenis_makanan, $stok, $harga){
			mysqli_query($this->con, "insert into makanan values ('$kode_makanan', '$merk_makanan', '$jenis_makanan', '$stok','$harga')");
		}

		function hapus($kode_makanan){
			mysqli_query($this->con, "delete from makanan where kode_makanan='$kode_makanan'");
		}

		function edit($kode_makanan){
			$data = mysqli_query($this->con, "select * from makanan where kode_makanan='$kode_makanan'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($kode_makanan, $merk_makanan, $jenis_makanan, $stok, $harga){
			mysqli_query($this->con, "update makanan set merk_makanan='$merk_makanan',jenis_makanan='$jenis_makanan',stok='$stok',harga='$harga' where kode_makanan='$kode_makanan'");
		}
	}
 ?>