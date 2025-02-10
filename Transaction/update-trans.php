<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id                = $_POST['id'];
$id_product        = $_POST['id_product'];
$id_customer       = $_POST['id_customer'];
$jumlah            = $_POST['jumlah'];
$tanggal           = $_POST['tanggal'];

//query update data ke dalam database berdasarkan ID
$itrans = "UPDATE transaksi SET id_product = '$id_product', id_customer = '$id_customer', jumlah = '$jumlah', tanggal = '$tanggal' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($itrans)) {
    //redirect ke halaman index.php 
    header("location: home-trans.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>