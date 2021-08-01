<?php 
	include "../model/koneksi_obat.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['kode_obat'],$_POST['nama_obat'], $_POST['jenis_obat'],$_POST['stok'], $_POST['harga']);		
		header("location:../view/libsss/tampilan_obat.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/libsss/tampilan_obat.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['kode_obat'],$_POST['nama_obat'], $_POST['jenis_obat'], $_POST['stok'], $_POST['harga']);
		header("location:../view/libsss/tampilan_obat.php");
	}
 ?>