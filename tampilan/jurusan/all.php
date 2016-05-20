<?php
$jurusan=$koneksi->prepare('select jurusan.*, sekolah.nama from jurusan left join sekolah on sekolah.id=jurusan.id_sekolah');
$jurusan->execute();
$data=$jurusan->fetchAll();
?>
<a href="index.php?p=jurusan&m=add" class="btn pull-right">Add New</a>
<h2>Data Jurusan</h2>
<table class="data">
	<thead>
		<tr>
			<th>No</th>
			<th>Sekolah</th>
			<th>Nama Jurusan</th>
			<th>Kepala Jurusan</th>
			<th colspan="4">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=1;
		foreach($data as $key)
		{
			?>
			<tr>
				<td><?php echo$i;?></td>
				<td><?php echo$key['nama'];?></td>
				<td><?php echo$key['nama_jurusan'];?></td>
				<td><?php echo$key['ka_jurusan'];?></td>
				<td><a target="blank" href="proses/jurusan/pdf.php?id=<?php echo$key['id'];?>">PDF</a></td>
				<td><a href="proses/jurusan/download.php?id=<?php echo$key['id'];?>">Download</a></td>
				<td><a href="index.php?p=jurusan&m=edit&id=<?php echo$key['id'];?>">Ubah</a></td>
				<td><a onclick="return confirm('Hapus Data <?php echo$key['nama_jurusan'];?>')" href="proses/jurusan/hapus.php?id=<?php echo$key['id'];?>">Hapus</a></td> 
			</tr>
			<?php $i++;}?>
		</tbody>
	</table>