<!DOCTYPE html>
<html>
    <head>
    <title>CREATE STUDI KASUS Week 13</title>
    </head>
    <body>
        <h2>CREATE DATA ANIME</h2>
        <br/>
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>TAMBAH ANIME</h3>
        <form method="post" action="prosestambah.php">
            <table>
                <tr>
                    <td>Kode Anime</td>
                    <td><input type="text" name="kode_nime"></td>
                </tr>
                <tr>
                    <td>Nama Anime</td>
                    <td><input type="text" name="nama_nime"></td>
                </tr>
                <tr>
                    <td>Tahun Anime</td>
                    <td><input type="text" name="tahun_nime"></td>
                </tr>
                <tr>
                    <td>Musim Anime</td>
                    <td><select name="musim_nime">
                        <option value="Fall">Fall</option>
                        <option value="Spring">Spring</option>
                        <option value="Summer">Summer</option>
                        <option value="Winter">Winter</option>
                    </select>
                </tr>
                <tr>
                    <td>Total Episode</td>
                    <td><input type="text" name="total_eps"></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>