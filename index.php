<!DOCTYPE html>
<?php
$arrContextOptions=array(
	"ssl"=>array(
		"verify_peer"=>false,
		"verify_peer_name"=>false,
	),
);

$file = "daftar.json";
$datanime = file_get_contents($file, false, stream_context_create($arrContextOptions));
$data = json_decode($datanime, true);
?>
<table border="1">
	<tr>
		<td>Kode</td>
		<td>Nama Anime</td>
		<td>Tahun Anime</td>
		<td>Musim Anime</td>
		<td>Total Episode</td>
	<tr>
		<td><?php echo $data[0]["kode_nime"];?></td>
		<td><?php echo $data[0]["nama_nime"];?></td>
		<td><?php echo $data[0]["tahun_nime"];?></td>
		<td><?php echo $data[0]["musim_nime"];?></td>
		<td><?php echo $data[0]["total_eps"];?></td>
	</tr>
</table>
