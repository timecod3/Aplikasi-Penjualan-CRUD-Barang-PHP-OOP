<?php
   
        require_once('koneksi.php');
        $koneksi = new database();
        
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];


        $action = $_GET['action'];
        if($action == "add"){
            $koneksi->tambah_data($nama_barang, $stok, $harga_beli, $harga_jual);
            header('location: index.php');
        }elseif($action == "update"){
            $koneksi->update_data($nama_barang, $stok, $harga_beli, $harga_jual, $_POST['id']);
            header('location: index.php');
        }elseif($action == "delete"){
            $id = $_GET['id'];
            $koneksi->delete_data($id);
            header('location: index.php');
        }
       
    

?>