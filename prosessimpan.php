<?php
include('koneksi.php');

$kode_prdk = $_POST['kode'];
$nama_produk = $_POST['namap'];
$harga_produk = $_POST['hargap'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url_gmbr = $_POST['gambar'];
$stok = $_POST['stok'];

$result = $conn->exec("INSERT INTO `barang` (`kode_prdk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gmbr`, `stok`) VALUES (NULL, '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$url_gmbr', '$stok');");
?>