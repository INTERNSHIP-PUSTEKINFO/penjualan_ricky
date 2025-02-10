<?php 
  include('../koneksi.php');
  
  // Ambil ID transaksi dari parameter GET
  $id = $_GET['id'];
  
  // Query untuk mendapatkan data transaksi bersama dengan nama customer dan produk
  $input_data = "SELECT transaksi.*, customer.nama, product.nama_produk 
                 FROM transaksi 
                 JOIN customer ON transaksi.id_customer = customer.id 
                 JOIN product ON transaksi.id_product = product.id 
                 WHERE transaksi.id = $id LIMIT 1";
  
  $result = mysqli_query($connection, $input_data);
  $row = mysqli_fetch_array($result);
  
  // Ambil daftar customer dan produk untuk dropdown
  $query_customer = "SELECT * FROM customer";
  $result_customer = mysqli_query($connection, $query_customer);

  $query_product = "SELECT * FROM product";
  $result_product = mysqli_query($connection, $query_product);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Edit Transaksi</title>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="../Transaction/home-trans.php">Transaction</a>
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
                    <a class="nav-link" href="../Customer/home-customer.php"><i class="fas fa-tachometer-alt"></i>Customer</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../Product/home-product.php"><i class="far fa-address-book"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Supplier/home-supplier.php"><i class="far fa-clone"></i>Supplier</a>
                </li>
            </ul>
        </div>
    </nav>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="update-trans.php" method="POST">
                
                <!-- Customer -->
                <div class="form-group">
                  <label>Nama Customer</label>
                  <select class="form-control" name="id_customer">
                    <option value="">Pilih Customer</option>
                    <?php while ($customer = mysqli_fetch_assoc($result_customer)) { ?>
                      <option value="<?php echo $customer['id']; ?>" 
                        <?php if ($customer['id'] == $row['id_customer']) echo 'selected'; ?>>
                        <?php echo $customer['nama']; ?>
                      </option>
                    <?php } ?>
                  </select>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <!-- Product -->
                <div class="form-group">
                  <label>Nama Produk</label>
                  <select class="form-control" name="id_product">
                    <option value="">Pilih Produk</option>
                    <?php while ($product = mysqli_fetch_assoc($result_product)) { ?>
                      <option value="<?php echo $product['id']; ?>" 
                        <?php if ($product['id'] == $row['id_product']) echo 'selected'; ?>>
                        <?php echo $product['nama_produk']; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Jumlah -->
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" name="jumlah" value="<?php echo $row['jumlah'] ?>" class="form-control">
                </div>

                <!-- Tanggal Transaksi -->
                <div class="form-group">
                  <label>Tanggal Transaksi</label>
                  <input type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="home-trans.php" class="btn btn-danger">KEMBALI</a>

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