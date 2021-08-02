<?php 
	include "../model/koneksi_transaksi.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['kode_transaksi'],$_POST['kode_makanan'],$_POST['kode_minuman'],$_POST['kode_obat'], $_POST['jml_transaksi'],$_POST['tanggal_transaksi']);		
		header("location:../view/libsss/tampilan_transaksi.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/libsss/tampilan_transaksi.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['kode_transaksi'],$_POST['kode_makanan'],$_POST['kode_minuman'],$_POST['kode_obat'], $_POST['jml_transaksi'],$_POST['tanggal_transaksi']);
		header("location:../view/libsss/tampilan_transaksi.php");
	}
 ?>