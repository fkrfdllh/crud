<?php
	include'../../conf.php';
	include'../../conn.php';
	$nama=post('nama');
	$alamat=post('alamat');
	$logo="";
	if($_FILES['logo']['tmp_name']!="")
	{
		$tmp_logo=$_FILES['logo']['tmp_name'];
		$logo=$_FILES['logo']['name'];
		move_uploaded_file($tmp_logo,"../../assets/foto/".$logo);
	}
	$simpan=$koneksi->prepare("insert into sekolah (`nama`,`alamat`,`logo`) values ('".$nama."','".$alamat."','".$logo."')");
	$simpan->execute();
	header("location:../../index.php?p=sekolah");
?>