<?php
	$hasil=$koneksi->prepare("select *from jurusan where `id`='".get('id')."'");
	$hasil->execute();
	$data=$hasil->fetch(PDO::FETCH_ASSOC);
	$sch=$koneksi->prepare('select *from sekolah');
	$sch->execute();
	$data_sch=$sch->fetchAll();
?>
<h4>Edit Data Jurusan "<?php echo$data['nama_jurusan'];?>"</h4>
<form method="POST" action="proses/jurusan/update.php">
	<input name="id" type="hidden" value="<?php echo$data['id']; ?>">
	<table>
		<tr>
			<td>Sekolah</td>
		<td>
		<select name="id_sekolah">
			<?php
			foreach($data_sch as $key)
			{
				?>
				<option <?php echo($key['id']==$data['id_sekolah'])?"selected":""; ?> value="<?php echo$key['id'];?>">
					<?php echo$key['nama'];?>
				</option>
				<?php
			}
			?>
		</select></td>
	</tr>
<tr>
	<td>Nama Jurusan</td>
	<td><input name="nama_jurusan" value="<?php echo$data['nama_jurusan']; ?>" /></td>
</tr>
<tr>
	<td>Kepala Jurusan</td>
	<td><input name="ka_jurusan" value="<?php echo$data['ka_jurusan']; ?>" /></td>
</tr>
<tr>
	<td></td>
	<td><button type="submit">Edit</button></td>
</tr>
</table>
</form>