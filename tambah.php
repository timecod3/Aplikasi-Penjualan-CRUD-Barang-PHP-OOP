<?php
    include ('koneksi.php');
    $db = new database();
    $data_barang = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi OOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h1>
                <img src="img/1.png" height="100px">
                Data Barang
            </h1>
            <hr>
            <a href="index.php" class="btn btn-warning" style="float: right;">Kembali</a> <br><br>
        </div>

        <form action="simpan.php?action=add" method="post">
            <div class="mb-2">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required autofocus>
            </div>
            <div class="mb-2">
                <label for="stok" class="form-label">Stok Barang</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <div class="mb-2">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control">
            </div>
            <div class="mb-2">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control">
            </div>
            <div>
                <input type="reset" class="btn btn-md btn-danger">
                <button type="submit" name="simpan" class="btn btn-md btn-success">Simpan</button>
            </div>
        </form>


<!-- JS BOOSTRAP -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>