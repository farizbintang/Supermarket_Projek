<?php 
	include "../model/koneksi_minuman.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['kode_minuman'],$_POST['merk_minuman'], $_POST['jenis_minuman'],$_POST['stok'], $_POST['harga']);		
		header("location:../view/libsss/index_minuman.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/libsss/index_minuman.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['kode_minuman'],$_POST['merk_minuman'], $_POST['jenis_minuman'], $_POST['stok'], $_POST['harga']);
		header("location:../view/libsss/index_minuman.php");
	}
 ?>