<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UKDW P.P | Validasi Pengajuan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('style/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('style/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('style/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="style/dist/img/ukdw.png" alt="UKDWLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/dashboardadmin" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <div class="card-footer clearfix">
                <button type="button" class="btn btn-danger float-right"><i class="fas fa-skull"></i> Loggout</button>
      </div>
    </ul>
  </nav>
   <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="style/dist/img/ukdw.png" alt="UKDW logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PINJAM ALAT UKDW</span>
    </a>
      <!-- Sidebar -->
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="style/dist/img/avatar02.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Renaldi Soeryadi</a>
        </div>
      </div>

<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
</li>
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Barang
              </p>
            </a>
</li>
          <li class="nav-item">
            <a href="/buatnotif" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Buat Notifikasi
              </p>
            </a>
</li>
            <li class="nav-item">
            <a href="/peminjam" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Data Peminjam
            </p>
            </a>
</li>
            <li class="nav-item">
            <a href="/laporan" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Laporan Pengembalian.
            </p>
            </a>
</li>
    </div>
</aside>  
<!-- /.sidebar-menu -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Validasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Validasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <aside>
    <!-- /.content-header -->
          <!-- ./col -->
    <!-- /.content -->
              <!-- /.card-header -->
              <!-- form start -->
            <form>
            <div class="card-body">
                  <div class="form-group">
                    <label for="InputDate">Tanggal Pinjam</label>
                    <div class="col-sm-3">
                    <input type="date" class="form-control" id="inputdate">
            </div>
                <div class="form-group">
                    <div class="col-sm-3 float-right">
                    <label for="InputDate">Peralatan yang akan dipinjam</label>
                    <select class="form-control">
                          <option>WebCam</option>
                          <option>Mic</option>
                          <option>Headset</option>
                          <option>Tripod</option>
                          <option>Modem</option>
                        </select>
            </div>
                  <div class="form-group">
                    <label for="InputDate">Tanggal Selesai</label>
                    <div class="col-sm-3">
                    <input type="date" class="form-control" id="Choosedate" placeholder="masukandate">
            </div>
                  <div class="form-group">
                    <label for="InputNik">Nik</label>
                    <input type="string" class="form-control" id="Nikanda">
            </div>
                  <div class="form-group">
                    <label for="Inputnama">Nama Dosen</label>
                    <input type="name" class="form-control" id="name">
            </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
                 <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" rows="3" placeholder="masukan ..."></textarea>
            </div>
            </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Validasi</button>
                </div>
              
            </div>
</form>
</section>
  </aside>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; Renaldi-Jevon <a href="https://adminlte.io">UKDW P.P</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Content Wrapper. Contains page content -->

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('style/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ ('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ ('style/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ ('style/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ ('style/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ ('style/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ ('plugins/moment/moment.min.js') }}"></script>
<script src="{{ ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ ('style/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ ('style/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ ('style/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ ('style/dist/js/adminlte.js') }}"></script>
</body>
</html>
