<!DOCTYPE html>
<html lang="en">
@include('admin.inc.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  @include('admin.inc.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  @include('admin.inc.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @yield('user')
  @yield('doctor')
  @yield('editdoctor')
  @yield('content')
  @yield('edit')
  <!-- /.content-wrapper -->
  
  @include('admin.inc.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.inc.scripts')
</body>
</html>
