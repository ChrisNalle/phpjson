<?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"select * from daftarnime");
        $d=mysqli_fetch_all($data,MYSQLI_ASSOC);
        $nime=json_encode($d);
        $fav=fopen("daftar.json","w");
        fwrite($fav,$nime);
        fclose($fav);
        header("location:index.php");
?>