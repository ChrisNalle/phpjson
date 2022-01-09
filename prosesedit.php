<?php
    include('koneksi.php');
    if(isset($_POST['simpan'])){
    $kode_nime = $_POST['kode_nime'];
    $nama_nime = $_POST['nama_nime'];
    $tahun_nime = $_POST['tahun_nime'];
    $musim_nime = $_POST['musim_nime'];
    $total_eps = $_POST['total_eps'];
    $query = "update daftarnime set kode_nime='$kode_nime', nama_nime='$nama_nime',tahun_nime='$tahun_nime',musim_nime='$musim_nime',total_eps='$total_eps' where kode_nime='$kode_nime'";
    $hasil = mysqli_query($koneksi,$query);
    if($hasil){
    header("location:data.php");
    }
    else{
    echo'Gagal';
    }}
?>