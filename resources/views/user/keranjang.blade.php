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
                                    <li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>
		
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
		
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
									</li>
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
	
	{{-- <section id="slider"><!--slider-->
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
										<h1><span>MaLoBo</span>BookStore</h1>
										<h2>A Lovely Book For A Lovely One</h2>
										<p>Malobo adalah toko buku online yang menjual berbagai jenis buku spesial untuk kamu yang spesial &#9829; </p>
											<button type="button" class="btn btn-default get" href="{{ url('/rumah') }}">Dapatkan Sekarang !</button></button>					
									</div>
									<div class="col-sm-6">
										<img src="{{asset('home2/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
											<h1><span>MaLoBo</span>BookStore</h1>
											<h2>A Lovely Book For A Lovely One</h2>
											<p>Malobo selalu menyediakan buku yang berkualitas untuk kamu yang tercinta &#9829; </p>
											<button type="button" class="btn btn-default get" href="{{ url('/rumah') }}">Dapatkan Sekarang !</button></button>
									</div>
									<div class="col-sm-6">
										<img src="{{asset('home2/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
								
								<div class="item">
									<div class="col-sm-6">
											<h1><span>MaLoBo</span>BookStore</h1>
											<h2>A Lovely Book For A Lovely One</h2>
											<p>Malobo adalah salah satu toko buku online terpecaya yang menyediakan kebutuhan buku untuk kamu yang tercinta &#9829; </p>
											<button type="button" class="btn btn-default get" href="{{ url('/rumah') }}">Dapatkan Sekarang !</button></button>
									</div>
									<div class="col-sm-6">
										<img src="{{asset('home2/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
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
	</section><!--/slider--> --}}
	
	<section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Shopping Cart</li>
                    </ol>
                </div>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="">Item</td>
                                <td class="">Nama Buku</td>
                                <td class="">Harga</td>
                                <td class="">Quantity</td>
                                <td class="">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalBayar = 0;
                            @endphp
                           
                            @foreach ($keranjang as $k)
                            <tr>
                                <td><img src="{{asset('images/'.$k->buku->bukuFoto)}}" style="width: 20%"></td>
                                <td>{{$k->buku->bukuNama}}</td>
                                <td>{{number_format($k->buku->bukuHarga)}}</td>
                                <td>{{$k->qty}}</td>
                                <td>{{number_format($k->qty * $k->buku->bukuHarga)}}</td>
                                @php
                                    $totalBayar+=$k->qty * $k->buku->bukuHarga;
                                @endphp
                            </tr>

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                    <td colspan="4">Biaya Ongkos Kirim</td>
                                    <td>{{number_format(15000)}}</td>
                            </tr>
                            <tr>
                                    <td colspan="4">Total Bayar</td>
                                    <td>
                                        {{number_format($totalBayar+15000)}}
                                       </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </section> <!--/#cart_items-->
        <section class="content">
                
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Upload Bukti Pembayaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{route('buktibayar.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="">Nama Penerima</label>
                          <input type="text" class="form-control" id="namaPenerima" name="namaPenerima" placeholder="Nama Penerima">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap (Kabupaten,Kecamatan,&Kota)</label>
                            <textarea name="alamatTujuan" id="alamatTujuan" cols="30" rows="10" placeholder="alamat tujuan"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Nomor Telepon</label>
                                <input type="number" class="form-control" id="noHp" name="noHp" placeholder="Nama Telepon Penerima">
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Total Tagihan</label>
                                        <div class="input-group">
                                            <input type="numeric" class="form-control" id="totalTagihan" name="totalTagihan" value="{{$totalBayar+15000}}">
                                            <div class="input-group-append">
                                            </div>
                                          </div>
                                      </div>
                            </div>
                        </div>
                        <div>
                                <label for="">Upload Foto Bukti Pembayaran</label>
                                <div class="input-group">
                                    <input type="file" class="custom-file-input" id="fotoBukti" name="fotoBukti">
                                    <label class="custom-file-label" >Choose file</label>
                                </div>
                        </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" value="Reset" class="btn btn-default float-right">Cancel</button>
                      </div>
                    </form>
                  </div>
                  <br>
	
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
