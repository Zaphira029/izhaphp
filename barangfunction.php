<?php
function simpanbarang() {
require ("config/koneksi.php");
if(isset($_POST['submit'])){
$kodebarang     = $_POST['kodebarang'];
$namabarang     = $_POST['namabarang'];
$jenisbarang    = $_POST['jenisbarang'];
$ukuran         = $_POST['ukuran'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];
if($kodebarang !=''){
    $sql="INSERT INTO barang VALUES('$kodebarang','$namabarang','$jenisbarang','$ukuran','$harga','$stok')";
    $hasil=mysqli_query($bebas,$sql);
    header("location:pertemuan301db.php");
}
else
{
    echo "Kode Barang Tidak Boleh Kosong";
}
}
}
function updatebarang($id){
    require 'config/koneksi.php';
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $jenisbarang = $_POST['jenisbarang'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $sql = "UPDATE barang SET kodebarang='$kodebarang', namabarang='$namabarang', jenisbarang='$jenisbarang', ukuran='$ukuran', harga='$harga', stok='$stok' WHERE kodebarang='$kodebarang'";
    mysqli_query($bebas, $sql);
    echo "<script type='text/javascript'>alert('Data dengan kode barang $kodebarang telah berhasil di update');document.location='pertemuan301db.php;'</script>";
}
?>