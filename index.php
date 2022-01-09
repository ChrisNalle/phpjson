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
<?= $data[0]["kode_nime"]; ?>
<?= $data[0]["nama_nime"]; ?>
