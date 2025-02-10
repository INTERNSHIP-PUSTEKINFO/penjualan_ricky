<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$icustomer = "DELETE FROM customer WHERE id = '$id'";

if($connection->query($icustomer)) {
    header("location: home-customer.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>