<?php 
	include "../model/koneksi_makanan.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['kode_makanan'],$_POST['merk_makanan'], $_POST['jenis_makanan'],$_POST['stok'], $_POST['harga']);		
		header("location:../view/libsss/tampilan_makanan.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/libsss/tampilan_makanan.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['kode_makanan'],$_POST['merk_makanan'], $_POST['jenis_makanan'], $_POST['stok'], $_POST['harga']);
		header("location:../view/libsss/tampilan_makanan.php");
	}
 ?>