<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Malobo Online Bookstore</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('template/plugins/datatables/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('template/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('template/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('template/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{asset('template/index3.html')}}" class="brand-link">
        <center>
        <img src="{{asset('template/logo.png')}}" style="width:80%">
        </center>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                       <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="far fa-grin-hearts"></i>
                              <p>
                          Haloo <big> {{Auth::user()->name}} </big>
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                                    <a class="nav-link active" style="color:#ff00ff" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-arrow-circle-left"></i>
                                        {{ __(' Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Website</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{asset('template/index.html')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
              </ul>
            </li>


            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                  <p>
                    Master
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="buku" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Buku</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a href="admin/buku/create">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Buku</p>
                    </a>
                  </li> --}}
                  <li class="nav-item">
                    <a href="kategori" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kategori</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{asset('template/pages/layout/fixed-sidebar.html')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Promo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{asset('template/pages/layout/fixed-topnav.html')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>User</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- TRANSAKSI img--}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Transaksi
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Keranjang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bukti Pembayaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Riwayat Pembayaran</p>
                    </a>
                  </li>
                </ul>
              </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    {{-- KONTEN --}}
    @yield('content')

     <!-- /.content-wrapper -->
     <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.0.0-beta.2
        </div>
        <strong>Copyright &copy; 2019 <a href="https://instagram.com/ekameissaa?igshid=12ews9bb7ssei">Meissa Eka Wardana </a></strong> & <a href=""><strong>Fachrizal A.Z.Mursalin</strong> </a>
      </footer>
        {{-- <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('template/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('template/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('template/dist/js/demo.js')}}"></script>
</body>
</html> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{URL::asset('template/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('template/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::asset('template/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('template/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('template/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{URL::asset('template/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('template/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{URL::asset('template/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('template/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('template/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('template/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('template/dist/js/demo.js')}}"></script>




<script src="{{URL::asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('template/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('template/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('template/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('template/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('template/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>


