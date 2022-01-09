<?php 
    include 'koneksi.php';
    $kode_nime = $_POST['kode_nime'];
    $nama_nime = $_POST['nama_nime'];
    $tahun_nime = $_POST['tahun_nime'];
    $musim_nime = $_POST['musim_nime'];
    $total_eps = $_POST['total_eps'];

    mysqli_query($koneksi,"insert into daftarnime values('$kode_nime','$nama_nime','$tahun_nime','$musim_nime','$total_eps')");
    header("location:data.php");
?>