<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Africa Policy Review') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/font-awesome.min.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('assets/css/Material-Card.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/Pretty-Footer.css') }}">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body id="app">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Africa Policy Review') }}
                    </a>

                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">Articles </a></li>
                    <li role="presentation"><a href="#">Submit </a></li>
                    <li role="presentation"><a href="#">Subscription </a></li>
                </ul>
            </div>
        </div>
    </nav>
      @yield('content')
      <div class="row">
          <div class="col-md-12">
              <footer>
                  <div class="row">
                      <div class="col-md-4 col-sm-6 footer-navigation">
                          <h3><a href="#">Organisation<span>logo </span></a></h3>

                          <p
                          class="company-name">{{ config('app.name', 'Africa Policy Review' ) }} </p>
                      </div>
                      <div class="col-md-4 col-sm-6 footer-contacts">
                          <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                              <p><span class="new-line-span">Ragati Rd. NHIF Building</span> Nairobi, Kenya</p>
                          </div>
                          <div><i class="fa fa-phone footer-contacts-icon"></i>
                              <p class="footer-center-info email text-left"> +254 795 467 386</p>
                          </div>
                          <div><i class="fa fa-envelope footer-contacts-icon"></i>
                              <p> <a href="#" target="_blank">info@africapolicyreview.org</a></p>
                          </div>
                      </div>
                      <div class="clearfix visible-sm-block"></div>
                      <div class="col-md-4 footer-about">
                          <h4>Who are we?</h4>
                          <p> The Journal of Africa Policy (JAP) is published on behalf of the Africa Policy Institute and is a leading continental journal on African policy studies.
                          </p>
                          <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                      </div>
                  </div>
              </footer>
          </div>
      </div>
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
