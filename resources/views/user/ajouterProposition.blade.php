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
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <h3>Get Started</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Budget</label>
                  <select class="custom-select" id="budget" name="budget">
    <option selected>Choose...</option>
    <option value="$1000 below">< $1,000</option>
    <option value="$2,000 - $5,000">$2,000 - $5,000</option>
    <option value="$5,000 - $15,000">$5,000 - $15,000</option>
    <option value="$15,000 - $25,000">$15,000 - $25,000</option>
    <option value="$25,000 >">$25,000 ></option>
  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

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

    @include('user.sidebar')
    @include('user.script')
  </body>
</html>