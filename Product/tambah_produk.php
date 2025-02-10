<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Produk</title>
  </head>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="../product/home-product.php">Product</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="../product/home-product.php"><i class="fas fa-tachometer-alt"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../customer/home-customer.php"><i class="fas fa-tachometer-alt"></i>Customer</a>
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
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PRODUK
            </div>
            <div class="card-body">
              <form action="simpan_produk.php" method="POST">
                
              <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" placeholder="Masukkan Nama Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" required>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Cemilan">Cemilan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows= "4"></textarea>
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" name="stok" placeholder="Masukkan Jumlah Stok" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control">
                </div>

                <div class="form-group">
                  <label>Berat</label>
                  <input type="number" name="berat" placeholder="Masukkan Jumlah Berat (Gram)" class="form-control">
                </div>

                <div class="form-group">
                <label for="id_supplier" >Pilih Supplier:</label>
                <select name="supplier" class="form-control">
                        <option disable selected>Pilih Supplier</option>
                                <?php
                                include '../koneksi.php';
                                $result = mysqli_query($connection, "SELECT * FROM supplier");
                                // var_dump($result);
                                // die();
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id']}'>{$row['nama']}</option>";
                                }
                                ?>
                    </select>
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