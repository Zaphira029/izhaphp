<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pertemuan 4</title>
</head>
<body align=center>
    <?php
    require ("barangfunction.php");
    ?>
    <h1>Input Data Barang</h1>
    <hr>
    <form name="fpenjualan" action="<?php simpanbarang(); ?>" method="post">
        <table align=center>
            <tr>
                <td>Kode Barang</td>
                <td>: <input name='kodebarang' size=10></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>: <input name='namabarang' size=10></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:
                    <select name='jenisbarang'>
                        <option value="O-Neck">O-Neck</option>
                        <option value="V-Neck">V-Neck</option>
                        <option value="T-Neck">T-Neck</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>:
                    <input type="radio" name='ukuran' value="S">S
                    <input type="radio" name='ukuran' value="M">M
                    <input type="radio" name='ukuran' value="L">L
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>: <input name='harga' size=10></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>: <input name='stok' size=2></td>
            </tr>
        </table>
        <hr>
        <button type="submit" name='submit'>Tambah</button>
        <button type="reset">Reset</button>
        <a href="pertemuan301db.php">Kembali</a>
    </form>
</body>
</html>