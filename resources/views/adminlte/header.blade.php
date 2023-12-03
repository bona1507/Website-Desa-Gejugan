<!-- Dependiences -->
<link rel="icon" href="{{ asset('storage/icon/dashboard.png') }}" type="image/png">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<i class="fa-solid fa-grid-horizontal"></i>
<title>Dashboard</title>
<style>
    .nav-right {
        text-decoration: none;
        padding: .4rem .8rem;
        border-radius: .4rem;   
        color:rgb(0, 82, 245);
        transition: ease 0.3s;
        font-weight: 600;
    }

    .nav-right:hover {
        color:rgb(37, 71, 221);
        box-shadow: 1px 1px 6px 0 rgba(44, 44, 44, 0.5)
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<!-- Close Dependiences -->

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <div class="d-flex align-items-center">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </div>

        <!-- Right navbar links -->
        <div class="ml-auto d-flex align-items-center">
            
            <!-- Logout link -->
            <a class="nav-right" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                LOGOUT
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
  <!-- /.navbar -->