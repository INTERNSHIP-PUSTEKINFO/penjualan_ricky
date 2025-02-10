<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama               = $_POST['nama'];
$alamat             = $_POST['alamat'];
$telepon            = $_POST['telepon'];

//query insert data ke dalam database
$isupplier = "INSERT INTO supplier (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
//untuk debugging
//var_dump($icustomer); 
//die();

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($isupplier)) {

    //redirect ke halaman index.php 
    header("location: home-supplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>