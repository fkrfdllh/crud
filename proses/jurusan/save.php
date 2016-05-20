<?php
include'../../conn.php';
include'../../conf.php';
$id_sekolah=post('id_sekolah');
$nama_jurusan=post('nama_jurusan');
$ka_jurusan=post('ka_jurusan');
$simpan=$koneksi->prepare("insert into jurusan (`id_sekolah`,`nama_jurusan`,`ka_jurusan`) values ('".$id_sekolah."','".$nama_jurusan."','".$ka_jurusan."')");
$simpan->execute();
header("location:../../index.php?p=jurusan");
?>