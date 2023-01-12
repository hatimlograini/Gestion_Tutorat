<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('EP/fonts/icomoon/style.css') }}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('EP/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('EP/css/style.css') }}">
    @include('tuteur.css')
  </head>
  <body>

    @include('tuteur.navbar')
<div class="content-wrapper">
  <div class="content">
<br><br><br><br><br>
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <h3>Ajouter une Seance</h3>


            <form class="mb-5" method="POST" action="{{ url('add_seanceADD') }}" >
                @csrf
              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Module</label>


                </div>
              </div>

              <div class="row">
              <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Module</label>
                  <select name="module" id="module" class="custom-select">
                    @foreach ($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->nom }}</option>
                    @endforeach
                  </select>

                </div>
              <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date</label>
                  <input type="date" class="form-control" name="Date" id="Date" placeholder="inserer la date">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Heure</label>
                  <input type="text" class="form-control" name="Heure" id="Heure"  placeholder="inserer l'heure">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Salle</label>
                  <input type="text" class="form-control" name="Salle" id="Salle"  placeholder="inserer la salle">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" value="Ajouter Seance" class="btn btn-primary rounded-0 py-2 px-4">
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>



    <script src="{{ asset('EP/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('EP/js/popper.min.js') }}"></script>EP/
    <script src="{{ asset('EP/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('EP/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('EP/js/main.js') }}"></script>

    @include('tuteur.sidebar')
    @include('tuteur.script')
  </body>
</html>
