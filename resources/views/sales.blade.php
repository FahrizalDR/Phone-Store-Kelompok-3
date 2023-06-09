<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sales</title>
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
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
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
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="dashboard"><img src="images/logohara1.png" alt="" /></a>
						</div>						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							{{-- <ul class="nav navbar-nav">
								<li><a href="adminaccount"><i class="fa fa-user"></i> Account</a></li>																								
								<li><a href="adminlogin"><i class="fa fa-lock"></i> Login</a></li>
							</ul> --}}
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--/header-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="brands_products"><!--brands_products-->
                            <h2>Menu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="dashboard"> <span class="pull-right"></span>Dashboard</a></li>
                                    <li><a href="product"> <span class="pull-right"></span>Product</a></li>
                                    <li><a href="sales" class="active"> <span class="pull-right"></span>Sales</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="produk">
                        <h2 class="title text-center">Sales</h2>
                        <div class="row">
                            <div class="col-sm-12 mb-1">
                                <form class="search_box pull-right" method="GET" >
                                    <input type="text" name="search" placeholder="Search" value="{{ $search }}">
                                </form>                               
                            </div>
                        </div>

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>                                    
                                    <th scope="col">ID Nota Penjualan</th>
                                    {{-- <th scope="col">ID Pegawai</th> --}}
                                    <th scope="col">NIK Pembeli</th>                                    
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td>{{ $d->ID_NOTA_PENJUALAN }}</td>     
                                        {{-- <td>{{ $d->ID_PEGAWAI }}</td>                                      --}}
                                        <td>{{ $d->NIK_PEMBELI }}</td>                                     
                                        <td>{{ $d->TGL_PENJUALAN }}</td>                                     
                                        <td>{{ $d->TOTAL_HARGA_PENJUALAN }}</td>                                     
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>                        
                    </div>
                    <div class="text-center">
                    {!! $data->appends(Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <footer id="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="text-center">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer> --}}



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>