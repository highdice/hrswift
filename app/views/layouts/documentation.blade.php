<!DOCTYPE html>
<html>
<head>
    <title>HRSwift API Documentation</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- STYLESHEETS -->
    <link rel="shortcut icon" href="{{ asset('images/logo_mini.ico') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- End Bootstrap -->

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/api/main.css') }}">
    <!-- End Main CSS -->
    <!-- END STYLESHEETS -->
</head>

<body>
<div id="wrapper">
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" class="img-responsive" style="max-width: 90px;" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('api_documentation') }}">Introduction</a></li>
                <li><a href="{{ URL::to('api_documentation/authentication') }}">Authentication</a></li>
                <!--
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Requests <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="active"><a href="#">Mobile Data</a></li>
                  </ul>
                </li>
                <li><a href="#">Errors</a></li>
                <li><a href="mobile_data.php">Mobile Data</a></li>
                <li><a href="mobile_voice_sms.php">Mobile Voice & SMS</a></li>
                -->
                <li><a href="{{ URL::to('api_documentation/users') }}">Users</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>

<!-- Content -->
<div>
    <!-- Content -->
		@yield('content')
	<!-- ./ content -->
</div>
<!-- End Content -->

<footer></footer>

</div>
</body>

<!-- JAVASCRIPTS -->
<!-- JQuery -->
<script src="{{ asset('js/jquery-2.0.2.min.js') }}"></script>
<!-- End JQuery -->

<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- End Bootstrap -->

<!-- Main Javascript -->
<script src="{{ asset('js/api/main.js') }}"></script> 
<!-- End Main Javascript -->
<!-- END JAVASCRIPTS -->
</html>