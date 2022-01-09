<!DOCTYPE html>
<html>
    <head>
    <title>CRUD PHP dan MySQLi</title>
    </head>
    <body>
        <h2>UPDATE DATA BUKU</h2>
        <br/>
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>UPDATE DATA BUKU</h3>
        <?php
        include 'koneksi.php';
        $kode_nime = $_GET['kode_nime'];
        $data = mysqli_query($koneksi,"select * from daftarnime where kode_nime='$kode_nime'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="prosesedit.php">
            <table>
                <tr> 
                    <td>Nama Anime</td>
                    <td>
                    <input type="hidden" name="kode_nime" value="<?php echo $d['kode_nime']; ?>">
                    <input type="text" name="nama_nime" value="<?php echo $d['nama_nime']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tahun Rilis</td>
                    <td><input type="text" name="tahun_nime" value="<?php echo $d['tahun_nime']; ?>"></td>
                </tr>
                <tr>
                    <td>Musim Anime</td>
                    <td><input type="text" name="musim_nime" value="<?php echo $d['musim_nime']; ?>"></td>
                </tr>
                <tr>
                    <td>Total Epsiode</td>
                    <td><input type="text" name="total_eps" value="<?php echo $d['total_eps']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>
