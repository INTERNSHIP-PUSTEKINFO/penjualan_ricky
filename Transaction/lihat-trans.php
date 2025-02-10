<?php
include '../koneksi.php';

// Ambil ID transaksi dari parameter URL
$id_trans = $_GET['id'];

// Ambil data transaksi dengan JOIN tabel customer dan product
$query = "
    SELECT transaksi.*, 
           customer.nama AS nama_customer, 
           product.nama_produk 
    FROM transaksi
    JOIN customer ON transaksi.id_customer = customer.id
    JOIN product ON transaksi.id_product = product.id
    WHERE transaksi.id = '$id_trans'
";
$result = mysqli_query($connection, $query);

// Periksa apakah data ditemukan
if (!$result || mysqli_num_rows($result) == 0) {
    die('Data transaksi tidak ditemukan.');
}

$trans = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">DATA TRANSAKSI</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Produk</th>
                            <td><?php echo $trans['nama_produk']; ?></td> 
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td><?php echo $trans['nama_customer']; ?></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td><?php echo $trans['jumlah']; ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td><?php echo $trans['tanggal']; ?></td>
                        </tr>
                    </table>
                    <a href="home-trans.php" class="btn btn-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
