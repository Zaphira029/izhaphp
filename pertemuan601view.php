<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pertemuan 6</title>
</head>
<body align="center">
    <h1>View Data barang</h1>
    <hr>
    <?php
        include 'config/koneksi.php';
        $kodebarang = $_GET['kodebarang'];
        $sql = "SELECT * FROM barang WHERE kodebarang = '$kodebarang'";
        $query = mysqli_query($bebas, $sql);
        $row = mysqli_fetch_array($query);
    ?>

    <form name="fpenjualan" action="update501.php" method="post">
        <input type="hidden" name="kodebarang" value="<?php echo $kodebarang; ?>" >
        <table align="center">
            <tr>
                <td>Kode Barang</td>
                <td>: <?php echo $row['kodebarang']; ?></td>
            </tr>
             <tr>
                <td>Nama Barang</td>
                <td>: <?php echo $row['namabarang']; ?></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>: <?php echo $row['jenisbarang']; ?></td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>: <?php echo $row['ukuran']; ?></td>
            </tr>
            <tr>
                <td>harga</td>
                <td>: <?php echo $row['harga']; ?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>: <?php echo $row['stok']; ?></td>
            </tr>
        </table>
        <hr>
        <?php
            echo "<a href='pertemuan501edit.php?kodebarang=$kodebarang'>Edit</a>&nbsp";
            echo "&nbsp<a href='pertemuan401.php'>Tambah Baru</a>&nbsp";
            echo "&nbsp<a href='pertemuan301db.php'>Kembali</a>&nbsp";
        ?>
    </form>
</body>
</html>