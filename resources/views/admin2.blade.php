<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
  <link href="{{ asset('css/aaa.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->



  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a  class="brand-link">
      <img src="{{asset('images/logo2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Electro Store</span>
    </a>

    <!-- Sidebar -->

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/hh.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class=" text-white"> </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
            <a href="{{route("AfficheCategorie")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("AfficheProduit")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produits

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("AfficheClient")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                client

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("Afficheordre")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Orders

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route("AfficheLivreur")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Livreur

              </p>
            </a>
          </li>

        <li class="nav-item">
          <a href="{{route("AfficheContact")}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Contact

            </p>
          </a>
        </li>
          <li class="nav-item">
            <a href="{{route("AfficheStat")}}"  class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Statistiques

              </p>
            </a>

            <a class="dropdown-item text-white text-center "  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
     </div>
   </div>




 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="hero">

<div class="snow">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
        <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
           <g id="snow-bottom-layer">
              <ellipse cx="6" cy="1009.5" rx="6" ry="5.5"/>
              <ellipse cx="138" cy="1110.5" rx="6" ry="5.5"/>
              <ellipse cx="398" cy="1055.5" rx="6" ry="5.5"/>
              <ellipse cx="719" cy="1284.5" rx="6" ry="5.5"/>
              <ellipse cx="760" cy="1155.5" rx="6" ry="5.5"/>
              <ellipse cx="635" cy="1459.5" rx="6" ry="5.5"/>
              <ellipse cx="478" cy="1335.5" rx="6" ry="5.5"/>
              <ellipse cx="322" cy="1414.5" rx="6" ry="5.5"/>
              <ellipse cx="247" cy="1234.5" rx="6" ry="5.5"/>
              <ellipse cx="154" cy="1425.5" rx="6" ry="5.5"/>
              <ellipse cx="731" cy="773.5" rx="6" ry="5.5"/>
              <ellipse cx="599" cy="874.5" rx="6" ry="5.5"/>
              <ellipse cx="339" cy="819.5" rx="6" ry="5.5"/>
              <ellipse cx="239" cy="1004.5" rx="6" ry="5.5"/>
              <ellipse cx="113" cy="863.5" rx="6" ry="5.5"/>
              <ellipse cx="102" cy="1223.5" rx="6" ry="5.5"/>
              <ellipse cx="395" cy="1155.5" rx="6" ry="5.5"/>
              <ellipse cx="826" cy="943.5" rx="6" ry="5.5"/>
              <ellipse cx="626" cy="1054.5" rx="6" ry="5.5"/>
              <ellipse cx="887" cy="1366.5" rx="6" ry="5.5"/>
              <ellipse cx="6" cy="241.5" rx="6" ry="5.5"/>
              <ellipse cx="138" cy="342.5" rx="6" ry="5.5"/>
              <ellipse cx="398" cy="287.5" rx="6" ry="5.5"/>
              <ellipse cx="719" cy="516.5" rx="6" ry="5.5"/>
              <ellipse cx="760" cy="387.5" rx="6" ry="5.5"/>
              <ellipse cx="635" cy="691.5" rx="6" ry="5.5"/>
              <ellipse cx="478" cy="567.5" rx="6" ry="5.5"/>
              <ellipse cx="322" cy="646.5" rx="6" ry="5.5"/>
              <ellipse cx="247" cy="466.5" rx="6" ry="5.5"/>
              <ellipse cx="154" cy="657.5" rx="6" ry="5.5"/>
              <ellipse cx="731" cy="5.5" rx="6" ry="5.5"/>
              <ellipse cx="599" cy="106.5" rx="6" ry="5.5"/>
              <ellipse cx="339" cy="51.5" rx="6" ry="5.5"/>
              <ellipse cx="239" cy="236.5" rx="6" ry="5.5"/>
              <ellipse cx="113" cy="95.5" rx="6" ry="5.5"/>
              <ellipse cx="102" cy="455.5" rx="6" ry="5.5"/>
              <ellipse cx="395" cy="387.5" rx="6" ry="5.5"/>
              <ellipse cx="826" cy="175.5" rx="6" ry="5.5"/>
              <ellipse cx="626" cy="286.5" rx="6" ry="5.5"/>
              <ellipse cx="887" cy="598.5" rx="6" ry="5.5"/>
           </g>
        </g>
        <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
           <g id="snow-top-layer">
              <circle cx="8" cy="776" r="8"/>
              <circle cx="189" cy="925" r="8"/>
              <circle cx="548" cy="844" r="8"/>
              <circle cx="685" cy="1115" r="8"/>
              <circle cx="858" cy="909" r="8"/>
              <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)"/>
              <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)"/>
              <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)"/>
              <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)"/>
              <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)"/>
              <circle cx="8" cy="8" r="8"/>
              <circle cx="189" cy="157" r="8"/>
              <circle cx="548" cy="76" r="8"/>
              <circle cx="685" cy="347" r="8"/>
              <circle cx="858" cy="141" r="8"/>
              <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)"/>
              <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)"/>
              <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)"/>
              <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)"/>
              <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)"/>
           </g>
        </g>
    </svg>
</div>



</div>





            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->



                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->

                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->


                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




    <!-- /.content -->

  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
