<?php
include '../koneksi.php';

// Ambil ID produk dari parameter URL
$id_customer = $_GET['id'];

// Ambil data produk berdasarkan ID
$query = "SELECT * FROM customer WHERE id = '$id_customer'";
$result = mysqli_query($connection, $query);
$customer = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">DATA CUSTOMER</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td><?php echo $customer['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo $customer['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo $customer['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td><?php echo $customer['telepon']; ?></td>
                        </tr>
                    </table>
                    <a href="home-customer.php" class="btn btn-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>