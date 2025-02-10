<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama               = $_POST['nama'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$alamat             = $_POST['alamat'];
$telepon            = $_POST['telepon'];

//query insert data ke dalam database
$icustomer = "INSERT INTO customer (nama, jenis_kelamin, alamat, telepon) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$telepon')";
//untuk debugging
//var_dump($icustomer); 
//die();

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($icustomer)) {

    //redirect ke halaman index.php 
    header("location: home-customer.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>