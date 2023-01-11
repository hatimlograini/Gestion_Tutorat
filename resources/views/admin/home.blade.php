

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Home</title>

 @include('admin.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Preloader -->
  <!-- Navbar -->
    @include('admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <!-- Brand Logo -->
    <!-- Sidebar -->
    @include('admin.sidebar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @include('admin.body')
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.script')
</body>
</html>



