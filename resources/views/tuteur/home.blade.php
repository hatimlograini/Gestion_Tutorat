

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tuteur</title>

 @include('tuteur.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Preloader -->
  <!-- Navbar -->
    @include('tuteur.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <!-- Brand Logo -->
    <!-- Sidebar -->
    @include('tuteur.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @include('tuteur.body')
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('tuteur.script')
</body>
</html>



