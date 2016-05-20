<?php
	include'../../conn.php';
	include'../../conf.php';
	$id=get('id');
	$delete=$koneksi->prepare("delete from berita where `id`='".$id."'");
	$delete->execute();
	header('location:../../index.php');
?>