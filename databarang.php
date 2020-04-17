<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 .container {
        border-radius: 10px;
        border: 1px solid black;
        background-color: white;
        width: 50%;
        padding-top: 1px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        padding-bottom: 15px;
    }
    /* .red {
            background: red;
            color: white;
    } */
</style>
<body>
<?php
include('koneksi.php');
$hasil = $conn->query('SELECT * FROM barang ');

if(isset($_GET['info'])) {

    $info=$_GET['info'];
    if($info=='hapus'){
        echo "Data Berhasil Dihapus";
    }
}
?>
<div class = "container">
<table >
    <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Satuan</th> 
        <th>Kategori</th>
        <th>URL Gambar</th>
        <th>Stock</th>
        <th>Modify</th>
    </tr>

    <?php foreach ($hasil as $data) { 
        ?>
    <tr>
        <td> <?php echo $data['kode_prdk'] ?> </td>
        <td> <?php echo $data['nama_produk'] ?> </td>
        <td> <?php echo $data['harga_produk'] ?> </td>
        <td> <?php echo $data['satuan'] ?> </td>
        <td> <?php echo $data['kategori'] ?> </td>
        <td> <?php echo $data['url_gmbr'] ?> </td>
        <td name = "stok" class = "
        <?php
        if ($data['stok'] < 5) {
            echo "Stok akan habis";
        }else{
            echo "<td>".$data['stok']."</td>";
        }
        ?>">
        <?php echo $data['stok']; ?>
        </td>
        
        
        <td><a href="formedit.php?key=<?php echo $data['kode_prdk']; ?>">edit</a> | <a href="deletebarang.php?key=<?php echo $data['kode_prdk']; ?>">delete</a></td>

        
    </tr>
    <?php }?>

        <tr>
            <td> <a href="form.php"><button>Input</button></a></td>
        </tr>
</table>
</div>
</body>
</html>

