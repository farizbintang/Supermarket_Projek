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
			$data = mysqli_query($this->con, "select * from obat");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($kode_obat,$nama_obat, $jenis_obat, $stok, $harga){
			mysqli_query($this->con, "insert into obat values ('$kode_obat', '$nama_obat', '$jenis_obat', '$stok','$harga')");
		}

		function hapus($kode_obat){
			mysqli_query($this->con, "delete from obat where kode_obat='$kode_obat'");
		}

		function edit($kode_obat){
			$data = mysqli_query($this->con, "select * from obat where kode_obat='$kode_obat'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($kode_obat, $nama_obat, $jenis_obat, $stok, $harga){
			mysqli_query($this->con, "update obat set nama_obat='$nama_obat',merk_obat='$jenis_obat',stok='$stok',harga='$harga' where kode_obat='$kode_obat'");
		}
	}
 ?>