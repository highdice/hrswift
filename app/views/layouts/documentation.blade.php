<!DOCTYPE html>
<html>
<head>
    <title>HRSwift API Documentation</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- STYLESHEETS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/bootstrap.min.css') }}">
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
<script src="{{ asset('packages/rydurham/sentinel/js/jquery-2.0.2.min.js') }}"></script>
<!-- End JQuery -->

<!-- Bootstrap -->
<script src="{{ asset('packages/rydurham/sentinel/js/bootstrap.min.js') }}"></script>
<!-- End Bootstrap -->

<!-- Main Javascript -->
<script src="{{ asset('js/api/main.js') }}"></script> 
<!-- End Main Javascript -->
<!-- END JAVASCRIPTS -->
<script>
$(window).scroll(function () { 
    var scrollValue = $(window).scrollTop();
    var section_1 = $("#section-1").position().top - 50;
    var section_2 = $("#section-2").position().top - 50;
    var section_3 = $("#section-3").position().top - 50;
    var section_4 = $("#section-4").position().top - 50;
    var section_5 = $("#section-5").position().top - 50;
    var section_6 = $("#section-6").position().top - 50;

    if(scrollValue == 0) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-1").addClass("active");
    }
    else if(scrollValue >= section_2 && scrollValue < section_3) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-2").addClass("active");
    }
    else if(scrollValue >= section_3 && scrollValue < section_4) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-3").addClass("active");
    }
    else if(scrollValue >= section_4 && scrollValue < section_5) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-4").addClass("active");
    }
    else if(scrollValue >= section_5 && scrollValue < section_6) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-5").addClass("active");
    }
    else if(scrollValue >= section_6) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-6").addClass("active");
    }
});
</script>
</html>