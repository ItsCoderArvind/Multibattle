<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multibattle | @yield('page_name')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
</head>


<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-teal">
    <!-- Left navbar links -->

    <ul class="navbar-nav">      
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>
    

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-teal">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Multibattle</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/game')}}" class="nav-link {{$active == 'game' ? 'active' : ''}}">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Game
              </p>
            </a>
          </li>
          
          <a href="{{ url('/addmatch')}}" class="nav-link {{$active == 'addmatch' ? 'active' : ''}}">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Add Match
              </p>
            </a>
        
          <li class="nav-item has-treeview {{$active[0] == 'match' ? 'menu-open active' : ''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Match
              <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link {{$active[1] == 'index' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Match</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{url('/pending_match')}}" class="nav-link {{$active[1] == 'pending_match' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Pending Match</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{url('/ongoing_match')}}" class="nav-link {{$active[1] == 'ongoing_match' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Ongoing Match</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{url('/complete_match')}}" class="nav-link {{$active[1] == 'complete_match' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Complete Match</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('/user')}}" class="nav-link {{$active == 'user' ? 'active' : ''}}">
            <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Block user
              </p>
            </a>
          </li>



          <li class="nav-item has-treeview">
            <a href="{{ url('/redeem')}}" class="nav-link {{$active == 'redeem' ? 'active' : ''}}">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
                 Redeem
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="{{ url('/product')}}" class="nav-link {{$active == 'product' ? 'active' : ''}}">
              <i class="nav-icon fas fa-clinic-medical"></i>
              <p>
                Product
              </p>
            </a>
          </li>


          <li class="nav-item">
          <a href="{{ url('/add_money')}}" class="nav-link {{$active == 'add_money' ? 'active' : ''}}">
              <i class="nav-icon far fa-money-bill-alt"></i>
              <p>
                Add Money
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('/reward')}}" class="nav-link {{$active == 'reward' ? 'active' : ''}}">
              <i class="nav-icon fa fa-gift"></i>
              <p>
                Reward
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('/lucky_draw')}}" class="nav-link {{$active == 'lucky_draw' ? 'active' : ''}}">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>
                Lucky draw
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview {{$active[0] == 'config' ? 'menu-open active' : ''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
              <p>
                Configuration
              <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="{{ url('/about_us')}}" class="nav-link {{$active[1] == 'about_us' ? 'active' : ''}}">
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{ url('/faq')}}" class="nav-link {{$active[1] == 'faq' ? 'active' : ''}}">
                    <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{ url('/customer_support')}}" class="nav-link {{$active[1] == 'customer_support' ? 'active' : ''}}">
                  <p>Customer Support</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{ url('/privacy_policy')}}" class="nav-link {{$active[1] == 'privacy_policy' ? 'active' : ''}}">
                  <p>Privacy Policy</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{ url('/terms_and_conditions')}}" class="nav-link {{$active[1] == 'terms_and_conditions' ? 'active' : ''}}">
                  <p>Terms & Conditions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
          <a href="{{ url('/rules')}}" class="nav-link {{$active == 'rules' ? 'active' : ''}}">
              <i class="nav-icon fas fa-keyboard"></i>
              <p>
                Rules
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
          <a href="{{ url('/redeem_option')}}" class="nav-link {{$active == 'redeem_option' ? 'active' : ''}}">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Redeem Option
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          <a href="{{ url('/notification')}}" class="nav-link {{$active == 'notification' ? 'active' : ''}}">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Notification
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          <a href="{{ url('/reset_password')}}" class="nav-link {{$active == 'reset_password' ? 'active' : ''}}">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Reset Password
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('page_name')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">@yield('page_name')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://github.com/ItsCoderArvind">ItsCoderArvind</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
</div>
<!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('assets/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>