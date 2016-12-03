<!DOCTYPE html>
<html>
    <head>
        <title>Fryst</title>

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">

    </head>
    <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <img class="navbar-brand" src="logo.png" />
                  <a class="navbar-brand text-brand" href="#">Fit With Fryst</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                   <li><a href="#">Link 1</a></li>
                   <li><a href="#">Link 2</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                   <li><a href="#">Register</a></li>
                   <li><a href="#">Sign In</a></li>
                 </ul>
               </div>





              </div>

            </nav>





                @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://code.jquery.com/ui/1.12.0/jquery-ui.min.js'></script>
<link rel=stylesheet href="https://code.jquery.com/ui/1.12.0/themes/vader/jquery-ui.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
});

</script>
@yield('scripts')
    </body>
</html>
