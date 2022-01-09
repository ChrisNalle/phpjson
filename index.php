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
<a href="input.php">Tambah input</a>
<table border="1">
	<tr>
		<td>Kode</td>
		<td>Nama Anime</td>
		<td>Tahun Anime</td>
		<td>Musim Anime</td>
		<td>Total Episode</td>
	<tr>
		<?php
			for($i = 0; $i < count($data); $i++){
		?>
		<td><?php echo $data[$i]["kode_nime"];?></td>
		<td><?php echo $data[$i]["nama_nime"];?></td>
		<td><?php echo $data[$i]["tahun_nime"];?></td>
		<td><?php echo $data[$i]["musim_nime"];?></td>
		<td><?php echo $data[$i]["total_eps"];?></td>
	</tr>
		<?php
			}
		?>
</table>
