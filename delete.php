<?php
    include('koneksi.php');
    $kode_nime = $_GET['kode_nime'];
    $result = mysqli_query($koneksi, "delete from daftarnime where kode_nime = '$kode_nime'");
    header("location:data.php");
?>