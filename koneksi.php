<?php

class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "yovie";
    var $koneksi = "";
    
    //ini database deck
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(mysqli_connect_errno()){
            echo "Koneksi database MySQL Gagal : " . mysqli_connect_error();
        }
    }

    //ini menampilkan data deck
    function tampil_data(){
        $data = mysqli_query($this->koneksi, "SELECT * FROM `barang`");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    //ini method tambah deck
    function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual){
        mysqli_query($this->koneksi, "INSERT INTO `barang`(`id`, `nama_barang`, `stok`, `harga_beli`, `harga_jual`) VALUES ('','$nama_barang','$stok','$harga_beli','$harga_jual')");
    }


    //ini ngeselect buat place holder deck
    function get_by_id($id){
        $query = mysqli_query($this->koneksi, "SELECT * FROM `barang` WHERE id='$id'");
        return $query->fetch_array();
    }

    //ini buat edit data deck
    function update_data($nama_barang, $stok, $harga_beli, $harga_jual, $id){
        $query = mysqli_query($this->koneksi, "UPDATE `barang` SET `nama_barang`='$nama_barang',`stok`='$stok',`harga_beli`='$harga_beli',`harga_jual`='$harga_jual' WHERE id='$id' ");
    }

    //ini buat hapus data deck
    function delete_data($id){
        $query = mysqli_query($this->koneksi, "DELETE FROM `barang` WHERE id='$id'");
    }

   
}
    
?>