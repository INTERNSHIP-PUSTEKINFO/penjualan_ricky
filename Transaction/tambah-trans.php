<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Data Transaksi</title>
  </head>
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
                    <a class="nav-link" href="../customer/home-customer.php"><i class="fas fa-tachometer-alt"></i>Customer</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../product/home-product.php"><i class="far fa-address-book"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../supplier/home-supplier.php"><i class="far fa-clone"></i>Supplier</a>
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
              TAMBAH DATA TRANSAKSI
            </div>
            <div class="card-body">
              <form action="simpan-trans.php" method="POST">
                
              <div class="form-group">
                <label for="id_product" >Pilih Produk:</label>
                <select name="id_product" class="form-control">
                        <option disable selected>Pilih Produk</option>
                                <?php
                                include '../koneksi.php';
                                $result = mysqli_query($connection, "SELECT * FROM product");
                                // var_dump($result);
                                // die();
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id']}'>{$row['nama_produk']}</option>";
                                }
                                ?>
                    </select>
                </div>

                <div class="form-group">
                <label for="id_customer" >Pilih Customer:</label>
                <select name="id_customer" class="form-control">
                        <option disable selected>Pilih Customer</option>
                                <?php
                                include '../koneksi.php';
                                $result = mysqli_query($connection, "SELECT * FROM customer");
                                // var_dump($result);
                                // die();
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id']}'>{$row['nama']}</option>";
                                }
                                ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" name="jumlah" placeholder="Masukkan Jumlah Transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" placeholder="Masukkan Tanggal Transaksi" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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