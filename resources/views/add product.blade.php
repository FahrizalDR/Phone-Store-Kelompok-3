<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <!-- <div class="container">
    <div class="row">
     <div class="col-sm-6">
      <div class="contactinfo">
       <ul class="nav nav-pills">
        <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
       </ul>
      </div>
     </div>
     <div class="col-sm-6">
      <div class="social-icons pull-right">
       <ul class="nav navbar-nav">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
       </ul>
      </div>
     </div>
    </div>
   </div> -->
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/logohara1.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            {{-- <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--/header-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Menu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="/dashboard"> <span class="pull-right"></span>Dashboard</a></li>
                                    <li><a href="/product"> <span class="pull-right"></span>Product</a></li>
                                    <li><a href="/sales"> <span class="pull-right"></span>Sales</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="produk">
                        <h2 class="title text-center">Product</h2>
                        <form action="{{ route('addhp') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputID">ID HP</label>
                                <input type="text" class="form-control" name="inputID" placeholder="ID HP">
                            </div>
                            <div class="form-group">
                                <label for="inputNamaHp">Nama HP</label>
                                <input type="text" class="form-control" name="inputNamaHp" placeholder="Nama Hp">
                            </div>
                            <div class="form-group">
                                <label for="inputWarna">Warna</label>
                                <input type="text" class="form-control" name="inputWarna" placeholder="Warna">
                            </div>
                            <div class="form-group">
                                <label for="inputStok">Stok</label>
                                <input type="text" class="form-control" name="inputStok" placeholder="Stok">
                            </div>
                            <div class="form-group">
                                <label for="inputHargaJual">Harga penjualan</label>
                                <input type="text" class="form-control" name="inputHargaJual"
                                    placeholder="Harga penjualan">
                            </div>
                            <div class="form-group">
                                <label for="inputHargaBeli">Harga Pembelian</label>
                                <input type="text" class="form-control" name="inputHargaBeli"
                                    placeholder="Harga Pembelian">
                            </div>
                            <div class="form-group">
                                Product Image: <input type="file" class="form-control" id="image_hp" name="image_hp"><br>
                            </div>
                            <button type="submit" class="btn btn-success"><a class="addproduk">Add</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-bottom mt-5">
            <div class="container">
                <div class="row">
                    <p class="text-center">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ $message }}'
            })
        </script>
    @endif
</body>

</html>
