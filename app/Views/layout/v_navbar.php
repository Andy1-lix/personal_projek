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