<?php
	include'../../conf.php';
	include'../../conn.php';
	$id=post('id');
	$nama=post('nama');
	$alamat=post('alamat');
	$update_logo="";
	if($_FILES['logo']['tmp_name']!="")
	{
		$tmp_logo=$_FILES['logo']['tmp_name'];
		$logo=$_FILES['logo']['name'];
		move_uploaded_file($tmp_logo,"../../assets/foto/".$logo);
		$update_logo=".`logo`='".$logo."'";
	}
	$simpan=$koneksi->prepare("update sekolah set `nama`='".$nama."',`alamat`='".$alamat."'".$update_logo." where `id`='".$id."'");
	$simpan->execute();
	header("location:../../index.php?p=sekolah");
?>