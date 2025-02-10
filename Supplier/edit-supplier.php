<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $isupplier = "SELECT * FROM supplier WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $isupplier);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Edit Data Supplier</title>
  </head>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="../supplier/home-supplier.php">Supplier</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="../admin-home.php"><i class="far fa-address-book"></i>Admin Home Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../customer/home-customer.php"><i class="fas fa-tachometer-alt"></i>Customer</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../product/home-product.php"><i class="far fa-address-book"></i>Product</a>
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
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA SUPPLIER
            </div>
            <div class="card-body">
              <form action="update-supplier.php" method="POST">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Supplier" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="telepon" value="<?php echo $row['telepon'] ?>" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>