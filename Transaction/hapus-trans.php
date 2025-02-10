<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$icustomer = "DELETE FROM transaksi WHERE id = '$id'";

if($connection->query($icustomer)) {
    header("location: home-trans.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>