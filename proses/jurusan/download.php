<?php
include"../../conn.php";
include"../../conf.php";
ob_start();
$hasil=$koneksi->prepare("select *from jurusan where id='".get('id')."'");
$hasil->execute();
$data=$hasil->fetch(PDO::FETCH_OBJ);
?>
<h1><?php $data->sekolah;?></h1>
<h2><?php $data->nama_jurusan;?></h2>
<h3><?php $data->ka_jurusan;?></h3>
<?php
$html=ob_get_clean();
$dompdf=new Dompdf\Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$pdf=$dompdf->output();
$dompdf->stream($data->nama_jurusan,array('Attachment'=>1))
?>