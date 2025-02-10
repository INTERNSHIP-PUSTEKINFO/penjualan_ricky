<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id                 = $_POST['id'];
$nama               = $_POST['nama'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$alamat             = $_POST['alamat'];
$telepon            = $_POST['telepon'];

//query update data ke dalam database berdasarkan ID
$icustomer = "UPDATE customer SET nama = '$nama',  jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', telepon = '$telepon' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($icustomer)) {
    //redirect ke halaman index.php 
    header("location: home-customer.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>