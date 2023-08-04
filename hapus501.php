<?php
include 'config/koneksi.php';

// menyimpan data id kedalam variable
$kodebarang     = $_GET['kodebarang'];

// query SQL untuk delete data
$query="DELETE from barang where kodebarang='$kodebarang'";
mysqli_query($bebas, $query);

// mengalihkan ke halaman table
header("location:pertemuan301db.php");
?>