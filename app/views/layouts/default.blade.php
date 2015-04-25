<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title> 
			@section('title') 
			@show 
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="{{ asset('images/logo_mini.ico') }}" />

		<!-- Bootstrap 3.0: Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/bootstrap.min.css') }}">

		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css"> -->
		<link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/bootstrap-theme.min.css') }}">

		<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery-ui-slider-pips.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">

		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
			/*.navbar-header {
			  float: none;
			}
			.navbar-toggle {
			  display: block;
			}
			.navbar-collapse {
			  border-top: 1px solid transparent;
			  box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
			}
			.navbar-collapse.collapse {
			  display: none!important;
			}
			.navbar-nav {
			  float: none!important;
			  margin: 7.5px -15px;
			}
			.navbar-nav>li {
			  float: none;
			}
			.navbar-nav>li>a {
			  padding-top: 10px;
			  padding-bottom: 10px;
			}*/
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body {{ (Request::is('/') || Request::is('login') || Request::is('register') || Request::is('forgot') ? 'class="main-bg-image"' : '') }}>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
	      <!-- <div class="container"> -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href=""><img src="{{ asset('images/logo.png') }}" class="img-responsive" /></a>
	        </div>
	        <div class="collapse navbar-collapse">
	        <section class="hidden-xs">
	        	<ul class="nav navbar-nav">
					@if (Auth::check() && Helpers::accessLevel() == 'admin')
						<li class="{{ (Request::is('users*') || Request::is('groups*') ? 'active' : '') }}"><a href="">Admin</a></li>
						<li class="{{ (Request::is('leaves*') ? 'active' : '') }}"><a href="">Leaves</a></li>
						<li class="{{ (Request::is('time*') ? 'active' : '') }}"><a href="">Time</a></li>
						<li class="{{ (Request::is('my_information*') ? 'active' : '') }}"><a href="{{ URL::to('my_information') }}">My Information</a></li>
						<li class="{{ (Request::is('/') || Request::is('login') ? 'active' : '') }}"><a href="">On Boarding</a></li>
						<li class="{{ (Request::is('/') || Request::is('login') ? 'active' : '') }}"><a href="">More</a></li>
					@endif
				</ul>
				<ul class="nav navbar-nav navbar-right">
		            @if (Auth::check())
					<li class="dropdown">
			          <a href="#" {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username; }} <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="">Profile</a></li>
			            <li><a href="{{ URL::to('logout') }}">Logout</a></li>
			          </ul>
			        </li>
			        @else
					<li class="{{ (Request::is('/') || Request::is('login') ? 'active' : '') }}"><a href="">Login</a></li>
					<li class="{{ (Request::is('users/create') || Request::is('register') ? 'active' : '') }} is-hidden"><a href="">Register</a></li>
					@endif
	          	</ul>
	        </section>
	        <section class="hidden-lg hidden-md hidden-sm">
	          <ul class="nav navbar-nav">
				@if (Auth::check() && Helpers::accessLevel() == 'admin')
					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li {{ (Request::is('users*') ? 'class="active"' : '') }}><a href="">Users</a></li>
						<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="">Groups</a></li>
			          </ul>
			        </li>
					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leave <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="#">Apply</a></li>
			            <li><a href="#">My Leave</a></li>
			            <li><a href="#">Entitlements</a></li>
			            <li><a href="#">Reports</a></li>
			            <li><a href="#">Leave Calendar</a></li>
			          </ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Time <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="#">Timesheets</a></li>
			            <li><a href="#">Attendance</a></li>
			          </ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Information <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="#">Personal Details</a></li>
			            <li><a href="#">Contact Details</a></li>
			            <li><a href="#">Emergecy Contacts</a></li>
			            <li><a href="#">Dependents</a></li>
			            <li><a href="#">Report To</a></li>
			            <li><a href="#">Qualifications</a></li>
			            <li><a href="#">Memberships</a></li>
			            <li><a href="#">History</a></li>
			            <li><a href="#">Account</a></li>
			          </ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">On Boarding <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="#">My Tasks</a></li>
			          </ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="#">Announcements</a></li>
			          	<li><a href="#">Assets</a></li>
			          	<li><a href="#">Directory</a></li>
			          	<li><a href="#">Organizational Chart</a></li>
			          	<li><a href="#">Preference</a></li>
			          </ul>
			        </li>	        
				@endif
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            @if (Auth::check())
				<li class="dropdown">
		          <a href="#" {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		          	<li><a href="">Profile</a></li>
		            <li><a href="{{ URL::to('logout') }}">Logout</a></li>
		          </ul>
		        </li>
		        @else
				<li class="{{ (Request::is('/') || Request::is('login') ? 'active' : '') }}"><a href="">Login</a></li>
				<li class="{{ (Request::is('users/create') || Request::is('register') ? 'active' : '') }} is-hidden"><a href="">Register</a></li>
				@endif
	          </ul>
	        </section>
	        </div><!-- ./ nav-collapse -->
	      <!-- </div> -->
	    </div>
		<!-- ./ navbar -->

		<!-- Container -->

		<div class="wrapper">
			@if(Auth::check())
			<div class="col-lg-2 col-md-3 col-sm-3 hidden-xs no-padding">
				<aside class="col-lg-2 col-md-3 col-sm-3 hidden-xs no-padding sidebar">
					<div class="sidebar-user-info">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 profile-picture-container">
							<img src="{{ asset('images/profile_picture.png') }}" class="img-responsive is-circle" />
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 no-padding">
							<p class="sidebar-user-info-name">Juan Dela Cruz</p>
							<p class="sidebar-user-info-position">Software Engineer</p>
							<p class="sidebar-user-info-time">
								<i class="glyphicon glyphicon-time sidebar-user-info-icon is-hidden"></i> 
								<label class="sidebar-user-info-hour">{{ date("h") }}&colon;{{ date("i") }}</label> 
								<label class="sidebar-user-info-ampm">{{ date("a"); }}</label>
							</p>
							<p class="sidebar-user-info-date">
								<i class="glyphicon glyphicon-calendar sidebar-user-info-icon is-hidden"></i> 
								<label class="sidebar-user-info-ymd">{{ date("M. j, Y"); }}</label> 
							</p>
						</div>
					</div>

					<div class="sidebar-list">
						<ul>
						@if(Request::is('dashboard*'))
							<a href=""><li {{ (Request::is('/') || Request::is('dashboard') ? 'class="active"' : '') }}><i class="glyphicon glyphicon-dashboard sidebar-list-icon"></i> Dashboard <div class="sidebar-item-pointer"></div></li></a>
							<a href=""><li><i class="glyphicon glyphicon-wrench sidebar-list-icon"></i> Settings</li></a>
						@elseif(Request::is('users*') || Request::is('groups*'))
							<?php 
								if(Request::is('users*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href=""><li {{ $status }}><i class="glyphicon glyphicon-user sidebar-list-icon"></i> Users {{ $pointer }}</li></a>
							<?php 
								if(Request::is('groups*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href=""><li {{ $status }}><i class="glyphicon glyphicon-th sidebar-list-icon"></i> Groups {{ $pointer }}</li></a>
						@elseif(Request::is('leaves*'))
			            	<?php 
								if(Request::is('leaves*') || Request::is('my_leaves*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-plane sidebar-list-icon"></i> My Leaves {{ $pointer }}</li></a>
							<?php 
								if(Request::is('entitlements*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-briefcase sidebar-list-icon"></i> Entitlements {{ $pointer }}</li></a>
							<?php 
								if(Request::is('reports*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-list-alt sidebar-list-icon"></i> Reports {{ $pointer }}</li></a>
							<?php 
								if(Request::is('leave_calendar*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-calendar sidebar-list-icon"></i> Leave Calendar {{ $pointer }}</li></a>
						@elseif(Request::is('time*'))
			            	<?php 
								if(Request::is('time*') || Request::is('timesheets*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-time sidebar-list-icon"></i> Timesheets {{ $pointer }}</li></a>
							<?php 
								if(Request::is('attendance*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-edit sidebar-list-icon"></i> Attendance {{ $pointer }}</li></a>	
			            @elseif(Request::is('my_information*'))
							<?php 
								if(Request::is('my_information*') || Request::is('personal_details*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-user sidebar-list-icon"></i> Personal Details {{ $pointer }}</li></a>
							<?php 
								if(Request::is('emergency_contacts*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-warning-sign sidebar-list-icon"></i> Emergency Contacts {{ $pointer }}</li></a>
							<?php 
								if(Request::is('dependents*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-home sidebar-list-icon"></i> Dependents {{ $pointer }}</li></a>
							<?php 
								if(Request::is('report_to*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-list-alt sidebar-list-icon"></i> Report To {{ $pointer }}</li></a>
							<?php 
								if(Request::is('qualifications*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-tasks sidebar-list-icon"></i> Qualifications {{ $pointer }}</li></a>
							<?php 
								if(Request::is('memberships*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-credit-card sidebar-list-icon"></i> Memberships {{ $pointer }}</li></a>
							<?php 
								if(Request::is('history*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-book sidebar-list-icon"></i> History {{ $pointer }}</li></a>
							<?php 
								if(Request::is('account*')){
									$status = 'class="active"';
									$pointer = '<div class="sidebar-item-pointer"></div>';
								}
								else {
									$status = '';
									$pointer = '';
								}
							?>
							<a href="#"><li {{ $status }}><i class="glyphicon glyphicon-folder-close sidebar-list-icon"></i> Account {{ $pointer }}</li></a>
						@endif
						</ul>
						<ul class="is-hidden">
							<a href=""><li {{ (Request::is('/') || Request::is('dashboard') ? 'class="active"' : '') }}><i class="glyphicon glyphicon-dashboard sidebar-list-icon"></i> Dashboard <div class="sidebar-item-pointer"></div></li></a>
							<a href=""><li><i class="glyphicon glyphicon-user sidebar-list-icon"></i> Employment Details</li></a>
							<a href=""><li><i class="glyphicon glyphicon-th-list sidebar-list-icon"></i> Pay Details</li></a>
							<a href=""><li><i class="glyphicon glyphicon-time sidebar-list-icon"></i> Time Details</li></a>
							<a href=""><li><i class="glyphicon glyphicon-check sidebar-list-icon"></i> Approvals</li></a>
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 inner-wrapper">
				<!-- Notifications -->
				<!-- @include('layouts.notifications') -->
				<!-- ./ notifications -->

				<div class="alert alert-danger alert-dismissable alert-inner">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  Error: Error Message
				</div>

				<div class="alert alert-success alert-dismissable alert-inner">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  Success: Success Message
				</div>

				<div class="alert alert-warning alert-dismissable alert-inner">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  Warning: Warning Message
				</div>

				<div class="alert alert-info alert-dismissable alert-inner">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  Welcome Administrator!
				</div>

				<br /><br />

				<!-- Content -->
				@yield('content')
				<!-- ./ content -->
			</div>
			@else
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- Notifications -->
				<!-- @include('layouts.notifications') -->
				<!-- ./ notifications -->

				<!-- Content -->
				@yield('content')
				<!-- ./ content -->
			</div>
			@endif
		</div>

		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
		

		<script src="{{ asset('packages/rydurham/sentinel/js/jquery-2.0.2.min.js') }}"></script>
		<script src="{{ asset('js/jquery-ui.js') }}"></script>
		<script src="{{ asset('js/jquery-ui-slider-pips.js') }}"></script> 
		<script src="{{ asset('packages/rydurham/sentinel/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('packages/rydurham/sentinel/js/restfulizer.js') }}"></script> 
		<script src="{{ asset('js/highcharts.js') }}"></script>
		<script src="{{ asset('js/highcharts-dark.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script> 
		<script>

		$(function () {
			$('[data-toggle="tooltip"]').tooltip();

		    // set up an array to hold the months
			var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
			// lets be fancy for the demo and select the current month.
			var activeMonth = new Date().getMonth();

			$(".slider")
			                    
			    // activate the slider with options
			    .slider({ 
			        min: 0, 
			        max: months.length-1, 
			        value: [2, 4],
			        range: true
			    })
			                    
			    // add pips with the labels set to "months"
			    .slider("pips", {
			        rest: "label",
			        labels: months
			    })
			                    
			    // and whenever the slider changes, lets echo out the month
			    .on("slidechange", function(e,ui) {
			        $("#labels-months-output").text( "You selected " + months[ui.values[0]] + " - " + months[ui.values[1]]);
			    });

			 $('#dashboard-line-chart').highcharts({
		        title: {
		            text: 'Monthly Average Temperature',
		            x: -20 //center
		        },
		        subtitle: {
		            text: '',
		            x: -20
		        },
		        xAxis: {
		            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		        },
		        yAxis: {
		            title: {
		                text: 'Temperature (°C)'
		            },
		            plotLines: [{
		                value: 0,
		                width: 1,
		                color: '#808080'
		            }]
		        },
		        tooltip: {
		            valueSuffix: '°C'
		        },
		        legend: {
		            layout: 'vertical',
		            align: 'right',
		            verticalAlign: 'middle',
		            borderWidth: 0
		        },
		        series: [{
		            name: 'Tokyo',
		            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
		        }, {
		            name: 'New York',
		            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
		        }, {
		            name: 'Berlin',
		            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
		        }, {
		            name: 'London',
		            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		        }]
		    });
		})
		</script>
	</body>
</html>
