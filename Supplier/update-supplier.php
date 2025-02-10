<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id                 = $_POST['id'];
$nama               = $_POST['nama'];
$alamat             = $_POST['alamat'];
$telepon            = $_POST['telepon'];

//query update data ke dalam database berdasarkan ID
$icustomer = "UPDATE supplier SET nama = '$nama', alamat = '$alamat', telepon = '$telepon' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($icustomer)) {
    //redirect ke halaman index.php 
    header("location: home-supplier.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>