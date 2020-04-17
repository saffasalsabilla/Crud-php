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

// menampilkan data dari db
// $result = $conn->query('SELECT * FROM barang ');


// echo "<table border=1>";
// echo "<tr>";
// echo "<th>Kode Produk</th> <th>Nama Produk</th> <th>Harga Produk</th> <th>Satuan</th> <th>Kategori</th> <th>URL Gambar</th> <th>Stok Awal</th>";
// echo "</tr>";

// foreach ($result as $d) : echo"<tr><td>". $d['kode_prdk']. "</td> <td>". $d['nama_produk']. "</td> <td>". $d['harga_produk']. "</td> <td>". $d['satuan']. "</td><td>". $d['kategori']. "</td><td>". $d['url_gmbr']. "</td><td>". $d['stok']."</td> </tr>";
// endforeach;
// echo "</table>";
?>