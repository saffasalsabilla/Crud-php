<?php
include ('koneksi.php');
$key=$_GET['key'];
$hasil=$conn->query("DELETE FROM `barang` WHERE `barang`.`kode_prdk` = $key");
if($hasil==TRUE){
    header("location:databarang.php?info=hapus");
}else{
    echo "data gagal dihapus";
}
?>