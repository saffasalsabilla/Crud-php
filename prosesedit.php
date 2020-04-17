<?php
include('koneksi.php');

$kode_prdk = $_POST['kode'];
$nama_produk = $_POST['namap'];
$harga_produk = $_POST['hargap'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url_gmbr = $_POST['gambar'];
$stok = $_POST['stok'];

$hasil=$conn->query("UPDATE `barang` SET `nama_produk` = '$nama_produk', `harga_produk` = '$harga_produk', `satuan` = '$satuan', `kategori` = '$kategori', `url_gmbr` = '$url_gmbr', `stok` = '$stok' WHERE `barang`.`kode_prdk` = '$kode_prdk';");

if($hasil==TRUE){
    header("location:databarang.php");
}else{
    echo "data gagal dihapus";
}

?>