<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_product        = $_POST['id_product'];
$id_customer       = $_POST['id_customer'];
$jumlah            = $_POST['jumlah'];
$tanggal           = $_POST['tanggal'];

//query insert data ke dalam database
$itrans = "INSERT INTO transaksi (id_product, id_customer, jumlah, tanggal) VALUES ('$id_product', '$id_customer', '$jumlah', '$tanggal')";
//untuk debugging
//var_dump($icustomer); 
//die();

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($itrans)) {

    //redirect ke halaman index.php 
    header("location: home-trans.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>