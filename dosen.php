<!DOCTYPE html>
<?php
// File json yang akan dibaca (full path file)
$file = "data.json";
// Mendapatkan file json
$dataBuku = file_get_contents($file);
// Mendecode anggota.json
$data = json_decode($dataBuku, true);
?>
<html>
 <head>
 <title>Parser JSON to PHP</title>
 </head>
 <body>
<?php

// ::Proses Tambah
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['transaksi']=="tambah"){
        $data [] = array(
        'key' => $_POST['key'],
        'kode' => $_POST['kode'],
        'judul' => $_POST['judul'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit']
        );
        // Mengencode data menjadi json
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        // Menyimpan data ke dalam anggota.json
        $dataBuku = file_put_contents($file, $jsonfile);
        header('Refresh:0; url='.$base_url);


 // ::Proses Tambah
    }elseif($_POST['transaksi']=="edit"){
        echo "edit";
        // Membaca data array menggunakan foreach
        foreach ($data as $row => $d) {
        // Perbarui data kedua
        if ($d['key'] === $_POST['key']) {
        $data[$row]['kode'] = $_POST['kode'];
        $data[$row]['judul'] = $_POST['judul'];
        $data[$row]['penulis'] = $_POST['penulis'];
        $data[$row]['penerbit'] = $_POST['penerbit'];
        }
        }
        // Mengencode data menjadi json
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        // Menyimpan data ke dalam anggota.json
        $anggota = file_put_contents($file, $jsonfile);
        header('Refresh:0; url='.$base_url);
    }
}

//:: Form Tambah ::
if($_GET['proses'] == "tambah"){
?>
<form method="POST" action="dosen.php">
    <input type="hidden" name="transaksi" value="<?php echo $_GET['proses']?>" size="25">
    <input type="hidden" name="key" value="<?php echo rand()?>" size="25">
    <table border="0">
        <tr>
            <td>Kode</td>
            <td><input type="input" name="kode" size="100"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="input" name="judul" size="100"></td>
        </tr>
            <td>Penulis</td>
            <td><input type="input" name="penulis" size="100"></td>
        <tr>
            <td>Penerbit</td>
            <td><input type="input" name="penerbit" size="100"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name=""></td>
        </tr>
    </table>
    </form>
<?php

//:: Form Ubah ::
}elseif($_GET['proses']){
    foreach ($data as $d){
        if($d['key']==$_GET['key']){
            $varKode = $d['kode'];
            $varJudul = $d['judul'];
            $varPenulis = $d['penulis'];
            $varPenerbit = $d['penerbit'];
        }
    }
?>
<form method="POST" action="dosen.php">
 <input type="hidden" name="transaksi" value="<?php echo $_GET['proses']?>" size="100">
 <input type="hidden" name="key" value="<?php echo $_GET['key']?>" size="100">
 <table border="0">
    <tr>
        <td>Kode</td>
        <td><input type="input" name="kode" value="<?php echo $varKode?>" size="100"></td>
    </tr>
    <tr>
        <td>Judul</td>
        <td><input type="input" name="judul" value="<?php echo $varJudul?>" size="100"></td>
    </tr>
        <td>Penulis</td>
        <td><input type="input" name="penulis" value="<?php echo $varPenulis?>"
        size="100"></td>
    <tr>
        <td>Penerbit</td>
        <td><input type="input" name="penerbit" value="<?php echo $varPenerbit?>"
        size="100"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name=""></td>
    </tr>
 </table>
 </form>
<?php

//:: Form Hapus ::
}elseif ($_GET['proses'] == "hapus") {
    // Membaca data array menggunakan foreach
    foreach ($data as $row => $d) {
        // Hapus data kedua
        if ($d['key'] === $_GET['key']) {
            // Menghapus data array sesuai dengan dosen
            // Menggantinya dengan elemen baru
            array_splice($data, $row, 1);
        }
    }
    // Mengencode data menjadi json
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    // Menyimpan data ke dalam anggota.json
    $anggota = file_put_contents($file, $jsonfile);
    // header('Refresh:0; url='.$base_url);
    echo "<b>Penghapusan Berhasil Dilakukan</b><br>";

}else{
    echo "";
}
?>
 <a href="dosen.php?proses=tambah">tambah</a>
 <table border="1px">
    <thead>
        <tr >
            <th>KODE</th>
            <th>JUDUL</th>
            <th>PENULIS</th>
            <th>PENERBIT</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php

    foreach ($data as $d) 
    {
    ?>
    <tr>
        <td><?php echo $d['kode']?></td>
        <td><?php echo $d['judul']?></td>
        <td><?php echo $d['penulis']?></td>
        <td><?php echo $d['penerbit']?></td>
        <td>
        <a href="<?php echo "dosen.php?proses=edit&key=".$d['key']?>">Edit</a>&nbsp;
        <a href="<?php echo "dosen.php?proses=hapus&key=".$d['key']?>">Hapus</a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
 </table>
 </body>
</html>