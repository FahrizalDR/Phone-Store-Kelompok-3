<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
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
                            <a href="index"><img src="images/logohara1.png" alt="" /></a>
                        </div>
                        <!-- <div class="btn-group pull-right">
       <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
         USA
         <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
         <li><a href="#">Canada</a></li>
         <li><a href="#">UK</a></li>
        </ul>
       </div>
       
       <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
         DOLLAR
         <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
         <li><a href="#">Canadian Dollar</a></li>
         <li><a href="#">Pound</a></li>
        </ul>
       </div>
      </div> -->
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                @if (session()->has('userAccess'))                                    
                                    <li><a href="/wishlist"><i class="fa fa-star"></i> Wishlist</a></li>
                                    <li><a href="/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i> Logout</a></li>
                                @else
                                    <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                @endif

                                {{-- @guest
                                    <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                @else                                   
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i> Logout</a></li>
                                @endguest --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
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
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/index" class="active">Home</a></li>
                                <li><a href="/shop">Shop</i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="shop">Products</a></li>
          <li><a href="product-details.html">Product Details</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li><a href="cart.html">Cart</a></li>
          <li><a href="login.html">Login</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
          <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
        <li><a href="404.html">404</a></li> -->
                                <li><a href="/contact-us">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <form class="search_box pull-right" METHOD="GET">
                            <input type="text" name="search" placeholder="Search" value="{{ $search }}" />
                        </form>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Iphone</span> 14 Pro</h1>
                                    <h2>Semakin Pro</h2>
                                    <p>Tersedia mulai 04 November 2022 </p>
                                    {{-- <form action="detail-iphone14pro">
                                        <button type="confirm" class="btn btn-default get">Get it now</button>
                                    </form> --}}
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/iPhone 14 ProMax.png" class="girl img-responsive"
                                        alt="" />
                                    <!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Samsung</span> A14</h1>
                                    <h2>Pilihan Pasti Buat Kamu</h2>
                                    <p>Tersedia dan segera miliki sekarang </p>
                                    {{-- <form action="detail-samsungA14">
                                        <button type="confirm" class="btn btn-default get">Get it now</button>
                                    </form> --}}
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/Samsung A14.png" class="girl img-responsive"
                                        alt="" />
                                    <!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>OPPO</span> Find N2 Flip</h1>
                                    <h2>See More in a Snap</h2>
                                    <p>Tersedia dan segera miliki sekarang </p>
                                    {{-- <form action="detail-oppoFindN2">
                                        <button type="confirm" class="btn btn-default get">Get it now</button>
                                    </form> --}}
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/Oppo Find N2 Flip.png" class="girl img-responsive"
                                        alt="" />
                                    <!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                {{-- <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="list-samsung"> <span class="pull-right">(6)</span>Samsung</a></li>
                                    <li><a href="list-iphone"> <span class="pull-right">(4)</span>Iphone</a></li>
                                    <li><a href="list-xiaomi"> <span class="pull-right">(2)</span>Xiaomi</a></li>
                                    <li><a href="list-oppo"> <span class="pull-right">(3)</span>Oppo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-sm-12 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Newest Items</h2>
                        @foreach ($table as $t)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <!-- <img src="images/shop/Samsung S23 S23 Plus.png" alt="" /> -->
                                            <img title=" " alt="{{ $t->NAMA_HP }}" width="250"
                                                height="175" src="{{ asset('images/shop/' . $t->image_hp) }}" />
                                            <h2>Rp {{ $t->HARGA_PEMBELIAN }}</h2>
                                            <p>{{ $t->NAMA_HP }}</p>
                                            <p>Ready Color : {{ $t->WARNA_HP }}</p>
                                            <p>Available Stock : {{ $t->STOCK_HP }}</p>
                                            @if (session()->has('userAccess'))
                                                <a href="/cart" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <a href="/wishlist" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-plus-square"></i>Add to wishlist</a>
                                            @else
                                                <a href="/login" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <a href="/login" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-plus-square"></i>Add to wishlist</a>
                                            @endif

                                            <!-- <a href="details-samsungA14" class="btn btn-default add-to-cart"></i>Details</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--features_items-->
                </div>
            </div>
    </section>

    <footer id="footer">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/Home">Company Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Close With Us</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Type Your email address Here" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
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
    @if ($message = Session::get('logout'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ $message }}'
            })
        </script>
    @endif
</body>

</html>
