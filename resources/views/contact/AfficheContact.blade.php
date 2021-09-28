<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration</title>
  <link href="{{asset('images/logo2.png')}}" rel="icon">
  <link href="{{asset('images/logo2.png')}}" rel="apple-touch-icon">
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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->


    <!-- Left navbar links -->

  <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-">
            <!-- <ol class="breadcrumb float-sm-right"> -->
              <li class="breadcrumb-item"><a href="{{route("admin2")}}">Home</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="row">
          <!-- Left col -->
          <section class="col-lg-10 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->



    <body>
        @if (session('ttt'))
        <div class="alert alert-danger">
        {{session('ttt')}}

        </div>
        @endif
        <table class="table table-striped table-dark">
            <thead>

              <tr>
                <th scope="col">ID</th>
                <th scope="col">nom</th>
                <th scope="col">email</th>
                <th scope="col">numero</th>
                <th scope="col">message</th>
              </tr>

            </thead>
            <tbody>
              @foreach ($contacts as $contact)
              <tr>
                  <td> {{$contact->id}}</td>
                  <td> {{$contact->nom}}</td>
                  <td> {{$contact->email}}</td>
                  <td> {{$contact->numero}}</td>
                  <td> {{$contact->message}}</td>
                  <td>

                    <a class="btn btn-danger" href="{{route('AfficheDeleteContact',['id'=>$contact->id])}}" role="button">supprimer</a>



                  </td>
              </tr>

              @endforeach

            </table>

        </div>

        </body>

        </html>

        </h3>



  <!-- /.navbar -->


   <!-- Main content -->

 <!-- /.content -->

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
          <div class=" text-white"></div>
        </div>

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
          <a class="dropdown-item text-red text-center "  href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
   </div>





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
