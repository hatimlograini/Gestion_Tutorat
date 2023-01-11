

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('user.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">

            </div>

          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('user.sidebar')
      <!-- partial -->

      @include('user.navbar')
        <!-- partial -->



        <div class="container-fluid page-body-wrapper">

                <div class="main-panel">
                    <div class="row">
                      <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">

                          <div class="card-body">

              <table class="table table-light table-hover">
                  <thead>
                    <tr>
                        <th style="padding: 10px">Cours</th>
                        <th style="padding: 10px">Nom tuteur</th>

                        <th>Action</th>
                    </tr>
                    @foreach ($data as $inscription)
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$inscription->name}}</td>
                        <td>{{$inscription->nom}}</td>
                        <td>
                            <a style="margin-right: 15px" onclick="return confirm('sure vous voulez supprimer')" class="btn btn-danger" href="{{ url('delete_inscription',$inscription->id) }}">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('user.script')
    <!-- End custom js for this page -->
  </body>
</html>




