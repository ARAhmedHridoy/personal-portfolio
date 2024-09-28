<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin | Dashboard</title>

  <!-- Favicon -->
  <link href="{{ url('fontend/img/Laravel.png') }}" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  @include('backend.inc._sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  
  @yield('admin_content')

  <!-- Main Footer -->

  @include('backend.inc._footer')

  
</div>
<!-- ./wrapper -->
<!-- message -->
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).fadeOut(500, function(){
        $(this).remove(); 
    });
  }, 5000);
</script>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ url('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('backend/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ url('backend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ url('backend/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('backend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ url('backend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('backend/dist/js/pages/dashboard2.js') }}"></script>
@yield('scripts')
</body>
</html>