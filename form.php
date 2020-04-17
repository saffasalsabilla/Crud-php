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

    <form action="databarang.php" method="POST">

    <h2 align = "center">FORM INPUT MASTER dan STOCK DATA BARANG</h2>

    <table class="table" align = "center">
    
        <tr>
            <td><h4>Kode Produk</h4></td>
            <td><input type="text " name="kode"></td>
        </tr>
        <tr>
            <td> <h4>Nama Produk</h4></td>
            <td><input type="text" style="width: 300px" name="namap"></input></td>
        </tr>
        <tr>
            <td><h4>Harga Produk</h4></td>
            <td><input type="number" style="width: 300px" name="hargap"></td>
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
                    <option value="null">Pilih Kategori</option>
                    <option value="Minuman Dingin">Minuman Dingin</option>
                    <option value="Makanan">Makanan </option>
                    <option value="Snack">Snack</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h4>URL GAMBAR</h4></td>
            <td><input type="url" style="width: 300px" name="gambar"></td>
            
        
        </tr>

        <tr>
            <td><h4>Stock Awal</h4></td>
            <td><input type="number" style="width: 300px" name="stok"></td>
        </tr>
        <tr>
            <td><button onclick="simpan()">Simpan</button></td>
        </tr>
    </table>
</div>

  

    </form>
    
</body>
</html>