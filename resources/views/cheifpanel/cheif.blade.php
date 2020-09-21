<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'FututreHospital') }}|Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" >
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}../plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- fullCalendar -->
   <link rel="stylesheet" href="{{ asset('../plugins/fullcalendar/main.min.css') }}">
   <link rel="stylesheet" href="{{ asset('../plugins/fullcalendar-daygrid/main.min.css') }}">
   <link rel="stylesheet" href="{{ asset('../plugins/fullcalendar-timegrid/main.min.css') }}">
   <link rel="stylesheet" href="{{ asset('../plugins/fullcalendar-bootstrap/main.min.css') }}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('../dist/css/adminlte.min.css') }}">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 

   @yield('style-extra')


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">ACCUEIL</a>
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
       
            
      
          
      
        @isset($patients)
     
            
        
            
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            @if (count($patients) > 0)
           
              <span class="badge badge-danger navbar-badge">new</span>            
            @endif
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          @foreach ($patients as $patient)
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      {{ $patient->name }}
                      <span class="float-right text-danger"><i class="fas fa-procedures"></i></span>
                    </h3>
                   <h3> <p class="text-sm">{{ $patient->pseudoname }}</p></h3>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              &nbsp;
              &nbsp;
             
              <a href="{{ route('accept.patient', ['id'=> $patient->id])}}" class="btn btn-outline-primary btn-sm">Accepter</a>
              <a href="{{ route('refuse.patient', ['id'=> $patient->id])}}" class="btn btn-outline-danger btn-sm">Refuser</a>

              <div class="dropdown-divider"></div>
          @endforeach
            </div>
        @endisset
       

      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/cheifdashboard" class="brand-link text-center" >
      <span class="brand-text font-weight-light" >PANNEAU CHEF SERVICE .</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{auth()->user()->getAvatar()}} class=" img-circle" width="100px" height="100px" alt="User Image">

        </div>
        <div class="info">
          <a href="/cheifdashboard" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <a href="/cheifdashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                
              </p>
            </a>
            
         
      
          
          <li class="nav-item has-treeview">
            <a href="{{route('show.patient')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Gestion patient
                
              </p>
            </a>
        </li>





        


        <li class="nav-item has-treeview">
            <a href="/caddmembre" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Ajouter membre
               
              </p>
            </a>
           
          </li>
          





          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Liste des Membres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
             
              <li class="nav-item">
                <a href="{{ route('show.members', ['id'=> 3]) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Medcin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('show.members', ['id'=> 4]) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Infirmiere</p>
                </a>
              </li>
            </ul>
          </li>


          

     







          
          <li class="nav-header"><hr></li>
          <li class="nav-item">
            <a href="/ccalendar" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendrier
                
              </p>
            </a>
          </li>
         
          
          <li class="nav-header"><hr></li>
       
     





          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Paramètres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/editmyinfos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modifier mes Infos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editcheifpassword" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modifier Mot de Passe</p>
                </a>
              </li>
           
            </ul>
          </li>





          <li class="nav-header">LABELS</li>
          
          <li class="nav-item">


            
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                <i class="nav-icon far fa-circle text-danger"></i>
                  {{ __('Se Deconnecter') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>





          
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" >
    <div class="content-wrapper  " style="margin-left: 0px">

   @yield('content')
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
    <div class="float-right d-none d-sm-inline-block">
     
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}s"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>



















</body>
</html>
