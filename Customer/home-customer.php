<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Data Customer</title>
  </head>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="../customer/home-customer.php">Customer</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="../admin-home.php"><i class="fas fa-tachometer-alt"></i>Admin Home Page</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../product/home-product.php"><i class="far fa-address-book"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../supplier/home-supplier.php"><i class="far fa-clone"></i>Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../transaction/home-trans.php"><i class="far fa-calendar-alt"></i>Transaction</a>
                </li>
            </ul>
        </div>
    </nav>
  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA CUSTOMER
            </div>
            <div class="card-body">
              <a href="tambah-customer.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
              
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM customer");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['telepon'] ?></td>
                      <td class="text-center">
                        <a href="lihat-customer.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">LIHAT</a>
                        <a href="edit-customer.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-customer.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>