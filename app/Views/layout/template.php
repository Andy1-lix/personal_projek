<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="<?= base_url('css/keranjang/keranjang.css') ?>">
    <title><?= $title ?></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>"><i class="fa-solid fa-shop me-2"></i> <strong>NANDA SALAD</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                <div class="input-group">
                    <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                    <button class="btn btn-warning text-white">Search</button>
                </div>
            </div>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <div class="ms-auto d-none d-lg-block">
                    <div class="input-group">
                        <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                        <button class="btn btn-warning text-white">Search</button>
                    </div>
                </div> -->
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="<?= base_url('Keranjang') ?>">Keranjang</a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="<?= base_url('login') ?>"><i class="fa-solid fa-circle-user me-1"></i> Login</a>
                </li>
            </ul>
            <!-- <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
                    </li>
                </ul> -->
        </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>