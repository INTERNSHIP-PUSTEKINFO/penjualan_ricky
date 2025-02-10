<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="admin-home.php">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" type="button" href="customer/home-customer.php"><i class="fas fa-tachometer-alt"></i>Customer</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" type="button" href="product/home-product.php"><i class="far fa-address-book"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="button" href="supplier/home-supplier.php"><i class="far fa-clone"></i>Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="button" href="transaction/home-trans.php"><i class="far fa-calendar-alt"></i>Transaction</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat Datang di Halaman Admin</h1>
        <h5 class="text-center mb-4"> silahkan pilih menu untuk melanjutkan: </h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>
                        <p class="card-text">Manage customer data.</p>
                        <a href="customer/home-customer.php" class="btn btn-primary">Go to Customer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>
                        <p class="card-text">Manage product data.</p>
                        <a href="product/home-product.php" class="btn btn-primary">Go to Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Supplier</h5>
                        <p class="card-text">Manage supplier data.</p>
                        <a href="supplier/home-supplier.php" class="btn btn-primary">Go to Supplier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Transaction</h5>
                        <p class="card-text">Manage transaction data.</p>
                        <a href="transaction/home-trans.php" class="btn btn-primary">Go to Transaction</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
