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
			$data = mysqli_query($this->con, "select * from transaksi");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($kode_transaksi,$kode_makanan, $kode_minuman,$kode_obat ,$jml_transaksi, $tanggal_transaksi){
			mysqli_query($this->con, "insert into transaksi values ('$kode_transaksi', '$kode_makanan', '$kode_minuman', '$kode_obat','$jml_transaksi','$tanggal_transaksi')");
		}

		function hapus($kode_transaksi){
			mysqli_query($this->con, "delete from transaksi where kode_transaksi='$kode_transaksi'");
		}

		function edit($kode_transaksi){
			$data = mysqli_query($this->con, "select * from transaksi where kode_transaksi='$kode_transaksi'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($kode_transaksi,$kode_makanan, $kode_minuman,$kode_obat ,$jml_transaksi, $tanggal_transaksi){
			mysqli_query($this->con, "update transaksi set kode_makanan='$kode_makanan',kode_minuman='$kode_minuman',kode_obat='$kode_obat',jml_transaksi='$jml_transaksi',tanggal_transaksi='$tanggal_transaksi' where kode_transaksi='$kode_transaksi'");
		}
	}
 ?>