<html>
    <head>
        <title>Latihan Database Dasar</title>
    </head>
    <body>
        <center>
            <font size=6>
                Tampil Data barang <br>
                <hr>
                <table border="10">
                    <tr bgcolor=silver>
                        <td width=50><center>No</center></td>
                        <td width=100><center>Kode Barang</center></td>
                        <td width=200><center>Nama Barang</center></td>
                        <td width=100><center>Jenis Barang</center></td>
                        <td width=50><center>Ukuran</center></td>
                        <td width=100><center>Harga</center></td>
                        <td width=50><center>Stok</center></td>
                        <td width=200><center>Proses</center></td>
                        <?php
                        require ("config/koneksi.php");
                        $sql = "select * from barang";
                        $hasil = mysqli_query($bebas, $sql);
                        $row = mysqli_fetch_row($hasil);

                        $n=1;
                        do
                        {
                        list($kodebarang, $namabarang, $jenisbarang, $ukuran, $harga, $stok)=$row;
                        echo "<tr>
                            <td>$n</td>
                            <td>$kodebarang</td>
                            <td>$namabarang</td>
                            <td>$jenisbarang</td>
                            <td>$ukuran</td>
                            <td align=right>$harga</td>
                            <td align=right>$stok</td>
                            <td align=center>
                            <a href='pertemuan601view.php?kodebarang=$kodebarang'>View</a>
                            <a href='pertemuan501edit.php?kodebarang=$kodebarang'>Edit</a>
                            <a href='hapus501.php?kodebarang=$kodebarang' onclick=\"return confirm ('Anda yakin mau menghapus data ini? ')\" >Delete</a>
                            </td>
                            </tr>";
                        $n++;
                        }
                        while($row=mysqli_fetch_row($hasil));
                        ?>
                            <tr><td align="center" colspan="8"><a href="pertemuan401.php">Tambah Barang</a></td></tr>
                    </tr>
                </table>
            </font>
        </center>
    </body>
</html>