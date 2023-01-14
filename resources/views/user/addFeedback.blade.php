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
    @include('user.css')
  </head>
  <body>

    @include('user.navbar')
<div class="content-wrapper">
  <div class="content">
<br><br><br><br><br>
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <h3>Donner votre feedback dans les seances effectue</h3>


            <form class="mb-5" method="POST" action="{{ url('add_feedback',$id) }}" >
                @csrf


              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Votre Feedback :</label>
                  <textarea class="form-control" name="feedback" cols="30" rows="4"  placeholder="Donner votre feedback"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" value="Votre Feedback" class="btn btn-primary rounded-0 py-2 px-4">
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
    <script src="{{ asset('EP/js/popper.min.js') }}"></script>
    <script src="{{ asset('EP/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('EP/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('EP/js/main.js') }}"></script>

    @include('user.sidebar')
    @include('user.script')
  </body>
</html>
