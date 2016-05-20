<?php
	include'../../conf.php';
	include'../../conn.php';
	$id=get('id');
	$hapus=$koneksi->prepare("delete from sekolah where `id` = '".$id."'");
	$hapus->execute();
	header("location:../../index.php?p=sekolah");
?>