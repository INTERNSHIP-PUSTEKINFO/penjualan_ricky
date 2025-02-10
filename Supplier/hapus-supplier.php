<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$icustomer = "DELETE FROM supplier WHERE id = '$id'";

if($connection->query($icustomer)) {
    header("location: home-supplier.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>