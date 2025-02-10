<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_produk        = $_POST['nama_produk'];
$kategori           = $_POST['kategori'];
$deskripsi          = $_POST['deskripsi'];
$stok               = $_POST['stok'];
$harga              = $_POST['harga'];
$berat              = $_POST['berat'];
$supplier           = $_POST['supplier'];

//query insert data ke dalam database
$query = "INSERT INTO product (nama_produk, kategori, deskripsi, stok, harga, berat, id_supplier) VALUES ('$nama_produk', '$kategori', '$deskripsi', '$stok', '$harga', '$berat', '$supplier')";
//untuk debugging
//var_dump($query); 
//die();

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: home-product.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>