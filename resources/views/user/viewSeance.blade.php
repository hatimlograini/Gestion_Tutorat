

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
                        <th style="padding: 10px">Date</th>
                        <th style="padding: 10px">Heure</th>
                        <th style="padding: 10px">Salle</th>

                        <th>Action</th>
                    </tr>
                    @foreach ($seances as $seance)
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$modules->find($seance->module_id)->nom}}</td>
                        <td>{{$users->find($seance->tueur_id)->name}}</td>
                        <td>{{$seance->Date}}</td>
                        <td>{{$seance->Heure}}</td>
                        <td>{{$seance->Salle}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('inscrire_seance',$seance->id) }} ">S'inscrire</a>
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




