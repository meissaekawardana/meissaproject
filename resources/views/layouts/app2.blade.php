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
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

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
                <a href="buku" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                  <p>
                    Buku
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="kategori" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                  <p>
                      Kategori
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
            </li>

                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="buku" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Buku</p>
                      </a>
                    </li>
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
                  </ul> --}}
              {{-- </li> --}}
              {{-- TRANSAKSI img--}}
              <li class="nav-item has-treeview">
                  <a href="buktibayar" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Bukti Pembayaran
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
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


