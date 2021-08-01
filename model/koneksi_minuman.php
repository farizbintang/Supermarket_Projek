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
			$data = mysqli_query($this->con, "select * from minuman");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($kode_minuman,$merk_minuman, $jenis_minuman, $stok, $harga){
			mysqli_query($this->con, "insert into minuman values ('$kode_minuman', '$merk_minuman', '$jenis_minuman', '$stok','$harga')");
		}

		function hapus($kode_minuman){
			mysqli_query($this->con, "delete from minuman where kode_minuman='$kode_minuman'");
		}

		function edit($kode_minuman){
			$data = mysqli_query($this->con, "select * from minuman where kode_minuman='$kode_minuman'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($kode_minuman, $merk_minuman, $jenis_minuman, $stok, $harga){
			mysqli_query($this->con, "update minuman set merk_minuman='$merk_minuman',jenis_minuman='$jenis_minuman',stok='$stok',harga='$harga' where kode_minuman='$kode_minuman'");
		}
	}
 ?>