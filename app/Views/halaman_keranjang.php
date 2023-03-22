<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        :root {
            --font1: 'Heebo', sans-serif;
            --font2: 'Fira Sans Extra Condensed', sans-serif;
            --font3: 'Roboto', sans-serif
        }

        body {
            font-family: var(--font3);
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
        }

        h2 {
            font-weight: 900
        }

        .container-fluid {
            max-width: 1200px
        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            border: 0;
            border-radius: 1rem
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(1rem - 1px);
            border-top-right-radius: calc(1rem - 1px)
        }

        .card h5 {
            overflow: hidden;
            height: 56px;
            font-weight: 900;
            font-size: 1rem
        }

        .card-img-top {
            width: 100%;
            max-height: 180px;
            object-fit: contain;
            padding: 30px
        }

        .card h2 {
            font-size: 1rem
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
        }

        .label-top {
            position: absolute;
            background-color: #8bc34a;
            color: #fff;
            top: 8px;
            right: 8px;
            padding: 5px 10px 5px 10px;
            font-size: .7rem;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase
        }

        .top-right {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            font-size: 1rem;
            font-weight: 900;
            background: #ff5722;
            line-height: 90px;
            text-align: center;
            color: white
        }

        .top-right span {
            display: inline-block;
            vertical-align: middle
        }

        @media (max-width: 768px) {
            .card-img-top {
                max-height: 250px
            }
        }

        .over-bg {
            background: rgba(53, 53, 53, 0.85);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(0.0px);
            -webkit-backdrop-filter: blur(0.0px);
            border-radius: 10px
        }

        .btn {
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            padding: 5px 50px 5px 50px
        }

        .box .btn {
            font-size: 1.5rem
        }

        @media (max-width: 1025px) {
            .btn {
                padding: 5px 40px 5px 40px
            }
        }

        @media (max-width: 250px) {
            .btn {
                padding: 5px 30px 5px 30px
            }
        }

        .btn-warning {
            background: none #f7810a;
            color: #ffffff;
            fill: #ffffff;
            border: none;
            text-decoration: none;
            outline: 0;
            box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
            border-radius: 100px
        }

        .btn-warning:hover {
            background: none #ff962b;
            color: #ffffff;
            box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
        }

        .bg-success {
            font-size: 1rem;
            background-color: #f7810a !important
        }

        .bg-danger {
            font-size: 1rem
        }

        .price-hp {
            font-size: 1rem;
            font-weight: 600;
            color: darkgray
        }

        .amz-hp {
            font-size: .7rem;
            font-weight: 600;
            color: darkgray
        }

        .fa-question-circle:before {
            color: darkgray
        }

        .fa-plus:before {
            color: darkgray
        }

        .box {
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
        }

        .box-img {
            max-width: 300px
        }

        .thumb-sec {
            max-width: 300px
        }

        @media (max-width: 576px) {
            .box-img {
                max-width: 200px
            }

            .thumb-sec {
                max-width: 200px
            }
        }

        .inner-gallery {
            width: 60px;
            height: 60px;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin: 1px;
            display: inline-block;
            overflow: hidden;
            -o-object-fit: cover;
            object-fit: cover
        }

        @media (max-width: 370px) {
            .box .btn {
                padding: 5px 40px 5px 40px;
                font-size: 1rem
            }
        }

        .disclaimer {
            font-size: .9rem;
            color: darkgray
        }

        .related h3 {
            font-weight: 900
        }

        footer {
            background: #212529;
            height: 80px;
            color: #fff
        }
    </style>
</head>

<body>
     <!-- <div class="superNav border-bottom py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                    <select class="me-3 border-0 bg-light">
                        <option value="en-us">EN-US</option>
                    </select>
                    <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>info@somedomain.com</strong></span>
                    <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>1-800-123-1234</strong></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                    <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Shipping</a></span>
                    <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
                </div>
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/')?>"><i class="fa-solid fa-shop me-2"></i> <strong>GEAR SHOP</strong></a>
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
                        <a class="nav-link mx-2 text-uppercase" href="<?= base_url('Keranjang')?>">Keranjang</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="<?= base_url('login')?>"><i class="fa-solid fa-circle-user me-1"></i> Login</a>
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
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">ASUS Rog</span> <span class="float-end price-hp">12354.00&euro;</span> </div>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12354.00&euro;</span> <span class="float-end"><a href="#">Example</a></span> </div>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="d-grid gap-2 my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm">Asus Rog</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12354.00&euro;</span> <span class="float-end"><a href="#" class="small text-muted">Reviews</a></span> </div>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                            <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm">DELL</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start price-hp">12354.00&euro;</span> <span class="float-end"><a class="text-muted small" href="#">Reviews</a></span> </div>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                            <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>