<?php
include'../../conn.php';
include'../../conf.php';
$id=get('id');
$hapus=$koneksi->prepare("delete from jurusan where `id` = '".$id."'");
$hapus->execute();
header("location:../../index.php?p=jurusan");
?>