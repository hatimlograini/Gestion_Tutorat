

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etudiant</title>

 @include('user.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Preloader -->
  <!-- Navbar -->
    @include('user.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <!-- Brand Logo -->
    <!-- Sidebar -->
    @include('user.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @include('user.body')
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('user.script')
</body>
</html>



