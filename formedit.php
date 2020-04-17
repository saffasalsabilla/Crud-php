<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="cssnya.css">
    <title>Document</title>
</head>
<body>

    <?php 
        include('koneksi.php');
        $key =$_GET['key'];
        $hasil = $conn->query("SELECT * FROM `barang` WHERE `kode_prdk` =$key");
        foreach($hasil as $data){ 
    ?>

    <form action="prosesedit.php" method="POST">

    <h2 align = "center">FORM EDIT STOCK DATA BARANG</h2>

    <table class="table" align = "center">
    
        <tr>
            <td><h4>Kode Produk</h4></td>
            <td><input type="text " name="kode" value = " <?php echo $data['kode_prdk'] ?> "></td>
        </tr>
        <tr>
            <td> <h4>Nama Produk</h4></td>
            <td><input type="text" style="width: 300px" name="namap" value = " <?php echo $data['nama_produk'] ?> "></input></td>
        </tr>
        <tr>
            <td><h4>Harga Produk</h4></td>
            <td><input type="number" style="width: 300px" name="hargap" value = " <?php echo $data['harga_produk'] ?> "></td>
        </tr>
        <tr>
            <td> <h4>Satuan</h4></td>
                <td>
                    <select name="satuan" style="width: 300px">
                        <option value="pcs">Pieces</option>
                        <option value="kg">Kg</option>
                        <option value="box">Box</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td> <h4>Kategori</h4></td>
            <td>
                <select name="kategori"style="width: 300px">
                <?php if (data['kategori']=="k"){?>
                            <option selected="selected" value="<?php echo $data['kategori']; ?> "></option>
                        <?php } ?>
                    <option value="null">Pilih Kategori</option>
                    <option value="Minuman Dingin">Minuman Dingin</option>
                    <option value="Makanan">Makanan </option>
                    <option value="Snack">Snack</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h4>URL GAMBAR</h4></td>
            <td><input type="url" style="width: 300px" name="gambar" value = " <?php echo $data['url_gmbr'] ?> "></td>
            
        
        </tr>

        <tr>
            <td><h4>Stock Awal</h4></td>
            <td><input type="number" style="width: 300px" name="stok" value = " <?php echo $data['stok'] ?> "></td>
        </tr>
        <tr>
            <td><button onclick="simpan()">Edit</button></td>
        </tr>
    </table>
</div>

  

    </form>
        <?php } ?>
</body>
</html>