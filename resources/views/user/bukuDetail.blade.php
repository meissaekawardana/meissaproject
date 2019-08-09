<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Malobo (My Lovely Book)</title>
    <link href="{{asset('home2/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('home2/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('home2/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('home2/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('home2/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('home2/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('home2/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('home2/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('home2/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('home2/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('home2/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +62 85724371751</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Malobo.com</a></li>
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
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
								<a href="{{ url('/rumah') }}"><img src="{{asset('images/logo.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                             
                                @if (Route::has('login'))
                                    @auth
                                    <li><a href="{{ url('/rumah') }}"><i class="fa fa-user"></i> Home</a></li>
                                @else
                                    <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('login') }}"><i class="fa fa-paste"></i> Register</a></li>
                                @endif
                                @endauth
                                @endif
                                <li><a href="{{asset('home2/cart.html')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="{{asset('home2/checkout.html')}}"><i class="fa fa-money"></i> Pembayaran</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Buku<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('list')}}">Semua Buku</a></li>
										<li><a href="{{asset('home2/cart.html')}}">Cart</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Kategori<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
											@foreach ($kategori as $k)
											<li><a href="">{{($k->kategoriNama)}}</a></li>
											@endforeach
                                    </ul>
                                </li> 
								{{-- <li><a href="{{asset('home2/404.html')}}">404</a></li> --}}
								<li><a href="{{asset('home2/contact-us.html')}}">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
							<div class="search_box pull-right">
								<form action="{{route('cari')}}" method="GET">
									<input type="text" name="cari" placeholder="Cari Nama Buku" value="{{ old('cari') }}"/>
									<button type="submit" class="btn btn-light" value="CARI"> <i class="fa fa-search"></i> </button>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    </header><!--/header-->
    
    <section>
            <div class="container">
                    @if (session('success'))
                    <div class="alert alert-success">
                      <strong>{{session('success')}}</strong>  
                    </div>
                  @endif
                  @if (count($errors)>0)
                    <div class="alert alert-danger">
                    <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <strong><li>{{$error}}</li></strong> 
                        @endforeach
                    </ul>
                  </div>
                  @endif
            <div class="row">
                
                    <div class="col-sm-11 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="{{asset('images/'.$buku->bukuFoto)}}" width="400px" height="900px">
                                </div>    
                            </div>
                            <div class="col-sm-7">
                                $bukuId={{$buku->id}}
                                <div class="product-information"><!--/product-information-->
                                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                    <h2>{{$buku->bukuNama}}</h2>
                                    <span>
                                        <span>Rp. {{$buku->bukuHarga}},00</span>
                                        <form method="post" action="{{route('cart')}}">
                                            @csrf
                                        <label>Quantity :</label>
                                        <input type="numeric" placeholder="3" id="qty" name="qty">
                                        <input type="hidden" id="id" name="id" value="{{$buku->id}}">
                                            <button type="submit" class="btn btn-default cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </button>
                                    </form>
                                    </span>
                                    <p><b>Stok Barang :
                                        </b>
                                         @if ($buku->bukuStok > 3)
                                        <span class="badge badge-warning">Tersedia</span>
                                        @else
                                        <span class="badge badge-danger">Stok Kosong</span>
                                        @endif
                                     </p>
                                     <p>
                                         <b>Penulis&emsp;&nbsp; : </b> {{$buku->bukuPenulis}}
                                     </p>
                                     <p>
                                        <b>Penerbit&emsp;: </b> {{$buku->bukuPenerbit}}
                                     </p>
                                     <p>
                                        <b> Deskripsi&nbsp; : </b> {{$buku->bukuDeskripsi}}
                                     </p>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->
                        
                        
                    </div>
                </div>
            </div>
        </section>
		
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
                    <div class="replay-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h2>Leave a replay</h2>
                                    <form>
                                        <div class="blank-arrow">
                                            <label>Your Name</label>
                                        </div>
                                        <span>*</span>
                                        <input type="text" placeholder="write your name...">
                                        <div class="blank-arrow">
                                            <label>Email Address</label>
                                        </div>
                                        <span>*</span>
                                        <input type="email" placeholder="your email address...">
                                        <div class="blank-arrow">
                                            <label>Web Site</label>
                                        </div>
                                        <input type="email" placeholder="current city...">
                                    </form>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-area">
                                        <div class="blank-arrow">
                                            <label>Your Name</label>
                                        </div>
                                        <span>*</span>
                                        <textarea rows="11"></textarea>
                                        <a class="btn btn-primary" href="">post comment</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--/Repaly Box-->
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 PEC Final Project</p>
					<p class="pull-right">Designed by <span><a href="https://instagram.com/ekameissaa?igshid=12ews9bb7ssei" target="__blank">Meissa Eka Wardana </a></span> & <span> <a href="">Fachrizal A.Mursalin</span></a></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('home2/js/jquery.js')}}"></script>
	<script src="{{asset('home2/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('home2/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('home2/js/price-range.js')}}"></script>
    <script src="{{asset('home2/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('home2/js/main.js')}}"></script>
</body>
</html>
{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
